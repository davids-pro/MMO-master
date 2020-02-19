## MMO-MASTER 

###### Team David , Fabio , Kamel.

### Creation des personnages pour un jeu MMO en utilisant la POO

### Classes crée : Guerrier , Barde , Mage et Voleur.
### Chaque classe aura ses propres caractéristique et fonction. 
### Chaque classe herite de la class Personnage.

### Hydrate pour la class Personnage

```php 
  public function __construct($nom, $sante, $force)
  {
    $values = ['nom' => $nom, 'sante' => $sante, 'force' => $force];
    $this->hydrate($values);
  }

  public function hydrate($values)
  {
    foreach ($values as $key => $value) {
      $method = 'set' . ucfirst($key);
      if (method_exists($this, $method)) {
        $this->{$method}($value);
      }
    }
  }
```

### Hydrate pour la class Guerrier

```php 
    parent::__construct($nom, $force, $sante);
    $this->hydrate([$rage]);
  }
```