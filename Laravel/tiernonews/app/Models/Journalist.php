<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journalist extends Model
{
    /*private int $id;
    private string $name;
    private string $surname;
    private string $email;
    private string $pasword;*/

    //Aquí declaramos los atributos del modela para que puedas ser rellenados
    //automáticamente al leer de la base de dato
    //Este fillable lo que hace es crear un constructor que recibe un solo parámetro:
    //un array asociativo con las claves de los nombres de los atributos
    protected $fillable = ["id", "name", "surname", "email", "password"];

    //Si la tabla se llamara diferente al modela en plural
    //protected $table = "periodistas";

    //un periodista tiene varios artículos (1-n)
    public function articles() {
        return $this->hasMany(Article::class);
    }
    
}
