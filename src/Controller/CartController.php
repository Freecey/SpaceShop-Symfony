<?php

namespace App\Controller;

use App\Class\Cart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/my-cart", name="cart.index")
     */
    public function index(Cart $cart): Response
    {
        return $this->render('cart/index.html.twig');
    }

    /**
     * @Route("/cart/add/{id}", name="cart.add")
     */
    public function add(Cart $cart, $id): Response
    {
        $cart->add($id);

        return $this->redirectToRoute('cart.index');
    }

    /**
     * @Route("/cart/remove", name="cart.remove")
     */
    public function remove(Cart $cart): Response
    {
        $cart->remove();

        return $this->redirectToRoute('products.index');
    }
}
