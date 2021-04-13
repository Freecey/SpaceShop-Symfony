<?php

namespace App\Controller;

use App\Class\Cart;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/my-cart", name="cart.index")
     */
    public function index(Cart $cart): Response
    {
        return $this->render('cart/index.html.twig', [
            'cart' => $cart->getFull()
        ]);
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
     * @Route("/cart/delete", name="cart.delete")
     */
    public function delete(Cart $cart): Response
    {
        $cart->delete();

        return $this->redirectToRoute('products.index');
    }

    /**
     * @Route("/cart/remove/{id}", name="cart.remove")
     */
    public function remove(Cart $cart, $id): Response
    {
        $cart->remove($id);

        return $this->redirectToRoute('cart.index');
    }

    /**
     * @Route("/cart/decrease/{id}", name="cart.decrease")
     */
    public function decrease(Cart $cart, $id)
    {


        $cart->decease($id);

        return $this->redirectToRoute('cart.index');
    }
}
