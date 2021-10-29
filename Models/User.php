<?php

namespace Models;

Use PDO;

class User extends Model
{
  /**
   * @inheritdoc
   */
  protected $table = 'users';

  public $id;
  public $email;
  public $password;
  public $name;

  /**
   * @inheritDoc
   */
  public function find($id)
  {
    $data = $this->hydrate(
    $this->fetch($id)
    );

    return $data;
  }

  /**
   * @inheritDoc
   */
  public function fetch($id)
  {
    $req =$this->db()->prepare("SELECT * FROM {$this->table} WHERE id = :bla");
    $req->execute([":bla" =>$id]);
    $this->closeConnection();

    return $req->fetch(PDO::FETCH_ASSOC);
  }

  /**
   * @inheritDoc
   */
  public function hydrate($data)
  {
    
      foreach ($data as $key => $value)
  
      {
        $method = 'set'.ucfirst($key);
  
        if (method_exists($this, $method))
        {
          return $this->$method($value);
        }
      }
    
  }

}
