<?phpnamespace App\Controllers;


/**
 * controllers/download.php
 *
 * Tell them how to get the framework
 * 
 * CodeIgniter website, template driven
 */
class Download extends Application {

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "Download CodeIgniter";
		$this->data['pagebody'] = 'download';

		// trying to extract release info, but getting empty result.
		// doing something wrong?
//		$this->load->library('Github_api');
//		$info = $this->github_api->get_repo_releases('bcit-ci', 'CodeIgniter');


		$this->render();
	}

}
