<?php 
	namespace AppBundle\Controller;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{


	
	/**
	* @Route("/hort", name="blog_home")
	*/
	public function indexAction()
	{

		$link = $this->generateUrl(
			'descricao',
			array("nome" => 'Eu mesmo!')
			);

		return $this->render (
			'hort/index.html.php',
			array(
				"nome" => 'Hortênsia',
				"link" => $link
				)
			);
	}

	/**
	* @Route('/detalhe/{nome}', name="descricao")
	*/

	public function detalheAction($nome){
		
		return new Response($nome);
	}

}
?>