<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $loja_id
 * @property string $nome
 * @property int $valor
 * @property boolean $ativo
 * @property Loja $loja
 */
class Produto extends Model
{
    public $timestamps = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['loja_id', 'nome', 'valor', 'ativo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function loja()
    {
        return $this->belongsTo('App\Models\Loja');
    }

    public function getValorFormatado()
    {
        $valor = $this->attributes['valor'];
        return 'R$ ' . number_format((float)$valor, 2, '.', '');
    }
}
