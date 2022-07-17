<?php

require_once __DIR__ . "/Cart.php";
require_once __DIR__ . "/PaymentHandler.php";
class Customer
{
    private $registered = false;
    private $name;
    private $surname;
    public Cart $cart;
    public PaymentHandler $paymentHandler;

    function __construct($_name = null, $_surname = null)
    {
        $this->cart = new Cart();
        $this->paymentHandler = new PaymentHandler();

        if (isset($_name) && isset($_surname)) {
            $this->register($_name, $_surname);
        }
    }

    public function getRegistered()
    {
        return $this->registered;
    }

    private function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    public function register($_name, $_surname)
    {
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setRegistered(true);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    public function checkout($paymentIndex)
  {
    
    $total = $this->cart->getTotal();

    $discount = $this->registered ? 20 : 0;
    $totalWithDiscount = $total - ($total * $discount / 100);

    $method = $this->paymentHandler->getMethod($paymentIndex);

    if ($method->checkExpiration()) {
      echo "pagamento riuscito per un totale di €" . $totalWithDiscount;
    } else {
      echo "pagamento fallito perchè la carta è scaduta il " . $method->getExpiration();
    };
  }
}
