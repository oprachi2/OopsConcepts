<?php
/* method chaining is a concept to simplify our code  instead of calling different methods separately we chain the method in  single line */
class person
{
  private $name="";
  private $Department="";
  private $Sal="";
  public function setName($name="")
  {
    $this->name=$name; 
    return $this;
  }
  public function setDepartment($Department="20")
  {
    $this->Department=$Department;
    return $this;
  }
  public function setSal($Sal="20")
  {
    $this->Sal=$Sal;
    return $this;
  }
  public function getInfo()
  {
    echo "Hello, My name is ".$this->name." and my Department is ".$this->Department." and my Salary is ".$this->Sal;
  }
}
    $person = new person();
    $person->setName("Prachi")->setDepartment("Software Developer")->setSal("16288")->getInfo(); // many methods are called in a single Line this is known as Method Chaining. 
 ?>
 
