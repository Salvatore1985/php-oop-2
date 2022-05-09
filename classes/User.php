
<?php
include_once __DIR__ . "/Products.php";

class User
{
   protected $userName;
   protected $passWord;
   protected $numCard;
   protected $registration;
   protected $isRegistration;
   protected $animalType;
   protected $discount;


   function __contruct(
      $userName,
      $passWord,
      $numCard,
      bool $registration,
      bool $isRegistration,
      $animalType,
      $discount = null
   ) {

      $this->userName = $userName;
      $this->passWord = $passWord;
      $this->numCard = $numCard;
      $this->registration = $registration;
      $this->isRegistration = $isRegistration;
      $this->animalType = $animalType;
      $this->discount = $discount;
   }

   public function getUserName()
   {
      return $this->userName;
   }

   public function getPassWord()
   {
      return $this->passWord;
   }

   public function getNunCard()
   {
      return $this->numCard;
   }

   public function getRegistration()
   {
      return $this->registration;
   }

   public function getIsRegistration()
   {
      return $this->isRegistration;
   }

   public function getDiscount()
   {

      return $this->discount;
   }

   public function getAnimalType()
   {
      return $this->animalType;
   }
}
