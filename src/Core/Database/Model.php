<?php

namespace App\Core\Database;

class Model
{
    protected string $table;

    protected array $fillable = [];
    
    //Start get table 
    public function getTable(): string
    {
        
        if (isset($this->table)) {
            return $this->table;
        }

        return $this->guessTable();
    }

    private function guessTable(): string
    {
        $callingClass = static::class;
        $callingClass = explode('\\', $callingClass);
        $callingClass = array_pop($callingClass);


        return strtolower($callingClass).'s'; 
    }

    
    public function getFillable(): array
    {
        return $this->fillable;
    }


    //get columns
    public function __set(string $name, mixed $value): void
    {
        $setter = ucwords($name, '_');
        $setter = str_replace('_', '', $setter);
        $setter = 'set'.$setter;

        if (method_exists($this, $setter)) {
            $this->$setter($value);
        }
    }

    public function __get(string $name): mixed
    {
        $getter = ucwords($name, '_');
        $getter = str_replace('_', '', $getter);
        $getter = 'get'.$getter;
        if (method_exists($this, $getter)) {
            
            return $this->$getter();
        }
        return null;
    }
   


 
    public static function all(): array
    {
        return static::get();
    }

    public static function find(int $id)
    {
        return static::select(['user_id','title', 'message', 'creation_date'])
            ->where('id', '=', $id)->first();
    }



    public static function last(int $amount, int $from = 0)
    {
        return static::orderBy(['creation_date' => 'DESC'])->max($amount, $from)
            ->get();
    }

    public function save()
    {
        return static::saveModel($this);
    }

    public static function __callStatic(string $name, array $arguments)
    {
        return QueryBuilder::getInstance(static::class)->$name(...$arguments);
    }
}
