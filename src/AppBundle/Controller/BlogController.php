<?php
	namespace AppBundle\Controller;


 	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 	use Symfony\Component\HttpFoundation\Response;
 	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
 	use Symfony\Component\HttpFoundation\Request;

 class BlogController extends Controller{

 	/**
 	 * @Route("/Pags", name="index")
 	 */
 	public function indexAction(Request $request)
 	{
 		$nome = $request->request->get ('nome');
 		$senha = $request->request->get ('senha');

 		if ($nome == 'Carol' && $senha == '123')
 		{
 			return $this ->RedirectToRoute (
 				'home_page',
 				array ('request' => $request),
 				307
 				);
 		}
 
 		return $this->render (
 			'Pags/index.html.php',
 			array()
 			);
 	}
 	/**
 	 * @Route("/Pags/home", name="home_page")
 	 */
 	public function homeAction()
 	{
 		$request = Request::createFromGlobals ();
 		$nome = $request->request->get ('nome');
 		$senha = $request->request->get ('senha');

 		

 		return $this->render (
 			'Pags/home.html.php',
 			array('nome'=>$nome, 'senha'=>$senha)
 			);
 	}
 }

 	
?>