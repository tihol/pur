<?php namespace Pur;

use Illuminate\Database\Eloquent\Model;

class Oppgavesett extends Model {

    protected $table = 'oppgavesett';

    protected $fillable = [
        'beskrivelse',
        'tid_opprettet',
        'tid_endret',
        'tid_publisert',
        'tid_aapent',
        'tid_lukket',
        'bruker_id',
    ];

    const CREATED_AT = 'tid_opprettet';
    const UPDATED_AT = 'tid_endret';

    /**
     * Den brukeren som har laget oppgavesettet
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skaper()
    {
        return $this->belongsTo('Pur\Bruker', 'bruker_id');
    }

    /**
     * Besvarelser på oppgaver i oppgavesettet
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function besvarelser()
    {
        return $this->hasMany('Pur\Besvarelse');
    }
}