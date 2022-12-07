<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\User;
use App\Models\Discover;
use App\Models\Category;
use App\Models\ConsoleAlbum;
use App\Models\ConsoleCategory;
use App\Models\ConsolePlaylist;
use App\Models\ConsoleProgram;
use App\Models\ConsoleTag;
use App\Models\ConsoleTier;
use App\Models\QuantumAlbum;
use App\Models\LandingPage;
use App\Models\QuantumCategory;
use App\Models\QuantumPlaylist;
use App\Models\QuantumProgram;
use App\Models\QuantumTag;
use App\Models\QuantumTier;
use App\Models\Playlist;
use App\Models\Program;
use App\Models\Tag;
use App\Models\Tier;
use App\Models\Extra;
use App\Models\ExtraTier;
use App\Models\Instruction;
use App\Models\Mood;
use App\Models\Subscription;
use App\Models\UserAlbum;
use App\Models\UserTier;
use App\Models\UserCategory;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(Request $request)
	{
		// echo '1';
		//exit;
		return [
			'tiers' => Tier::where('is_active', true)->get(),
			'categories' => Category::where('is_active', true)->get(),
			'tags' => Tag::all(),
			'albums' => Album::where('is_active', true)->orderBy('order', 'asc')->get(),
			'programs' => Program::orderBy('order', 'asc')->get(),
			//'tracks' => Track::orderBy('order', 'asc')->get(),
			'playlists' => Playlist::orderBy('order', 'asc')->get(),
			'discover' => Discover::all()
		];
	}

	public function quantum(Request $request)
	{
		// echo '1';
		//exit;
		return [
			'tiers' => QuantumTier::where('is_active', true)->get(),
			'categories' => QuantumCategory::where('is_active', true)->get(),
			'tags' => QuantumTag::all(),
			'albums' => QuantumAlbum::where('is_active', true)->orderBy('order', 'asc')->get(),
			'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
			//'tracks' => Track::orderBy('order', 'asc')->get(),
			'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
		];
	}

	public function quantum_landing(Request $request)
	{
		// echo '1';
		//exit;
		return [
			//'tiers' => QuantumTier::where('is_active', true)->get(),
			//'categories' => QuantumCategory::where('is_active', true)->get(),
			//'tags' => QuantumTag::all(),
			'landing_dtl' => LandingPage::select('id', 'name', 'image')->where('is_active', true)->orderBy('order', 'asc')->get(),
			//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
			//'tracks' => Track::orderBy('order', 'asc')->get(),
			//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
		];
	}
	public function tiers(Request $request)
	{
		// echo '1';
		//exit;
		if (isset($_GET['id'])) {
			//$image = Album::where('is_active', true)->where('id',$_GET['id'])->orderBy('order', 'asc')->get();	
			return [
				'tiers' => Tier::where('is_active', true)->where('id', $_GET['id'])->get(),
				'tmp' => '0',
				//'categories' => QuantumCategory::where('is_active', true)->get(),
				//'tags' => QuantumTag::all(),
				//'landing_dtl' => LandingPage::select('id','name','image')->where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			];
		} else {
			//$image = Album::where('is_active', true)->orderBy('order', 'asc')->get();
			return [
				'tiers' => Tier::where('is_active', true)->get(),
				'tmp' => '0',
				//'categories' => QuantumCategory::where('is_active', true)->get(),
				//'tags' => QuantumTag::all(),
				//'landing_dtl' => LandingPage::select('id','name','image')->where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			];
		}
	}
	public function tags(Request $request)
	{
		// echo '1';
		//exit;
		if (isset($_GET['id'])) {
			//$image = Album::where('is_active', true)->where('id',$_GET['id'])->orderBy('order', 'asc')->get();	
			return [
				//'tiers' => Tier::where('is_active', true)->where('id',$_GET['id'])->get(),
				'tags' => Tag::where('id', $_GET['id'])->get(),
				//'categories' => QuantumCategory::where('is_active', true)->get(),
				//'tags' => QuantumTag::all(),
				//'landing_dtl' => LandingPage::select('id','name','image')->where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			];
		} else {
			//$image = Album::where('is_active', true)->orderBy('order', 'asc')->get();
			return [
				//'tiers' => QuantumTier::where('is_active', true)->get(),
				//'categories' => QuantumCategory::where('is_active', true)->get(),
				'tags' => Tag::all(),
				//'landing_dtl' => LandingPage::select('id','name','image')->where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			];
		}
	}
	public function categories(Request $request)
	{
		// echo '1';
		//exit;
		if (isset($_GET['id'])) {
			//$image = Album::where('is_active', true)->where('id',$_GET['id'])->orderBy('order', 'asc')->get();	
			return [
				//'tiers' => QuantumTier::where('is_active', true)->get(),
				'categories' => Category::where('is_active', true)->where('id', $_GET['id'])->get(),
				//'tags' => QuantumTag::all(),
				//'landing_dtl' => LandingPage::select('id','name','image')->where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			];
		} else {
			//$image = Album::where('is_active', true)->orderBy('order', 'asc')->get();
			return [
				//'tiers' => QuantumTier::where('is_active', true)->get(),
				'categories' => Category::where('is_active', true)->get(),
				//'tags' => QuantumTag::all(),
				//'landing_dtl' => LandingPage::select('id','name','image')->where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			];
		}
	}
	public function albums(Request $request)
	{
		// echo '1';
		//exit;
		if (isset($_GET['id'])) {
			$image = Album::where('is_active', true)->where('id', $_GET['id'])->orderBy('order', 'asc')->get();
		} else {
			$image = Album::where('is_active', true)->orderBy('order', 'asc')->get();
		}

		$image = json_encode($image);
		$image = json_decode($image);
		foreach ($image as $k => $album) {
			$folder = $album->audio_folder;
			$file = $album->image;
			$url = 'https://www.combined.ingeniusstudios.com/public/api/image?w=&h=&img=' . $folder . '/' . $file;

			//str_replace($album->image,$url,$album);
			$album->image = $url;
			$new[] = $album;
			//print_r($folder);print_r($file);print_r($url);print_r($album); exit;
			//foreach($album as $kk => $vv){

			//print_r($vv);	
			//}
			//print_r($v);	
		}
		//print_r($new);
		return [
			'albums' => $new,
		];
		/*return [
            //'tiers' => QuantumTier::where('is_active', true)->get(),
            //'categories' => QuantumCategory::where('is_active', true)->get(),
            //'tags' => QuantumTag::all(),
            'albums' => Album::where('is_active', true)->orderBy('order', 'asc')->get(),
            //'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
			//'tracks' => Track::orderBy('order', 'asc')->get(),
            //'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
        ];*/
	}
	public function programs(Request $request)
	{
		// echo '1';
		//exit;
		if (isset($_GET['id'])) {
			//$image = Album::where('is_active', true)->where('id',$_GET['id'])->orderBy('order', 'asc')->get();	
			return [
				//'tiers' => QuantumTier::where('is_active', true)->get(),
				//'categories' => Category::where('is_active', true)->where('id',$_GET['id'])->get(),
				'programs' => Program::orderBy('order', 'asc')->where('id', $_GET['id'])->get(),
				//'tags' => QuantumTag::all(),
				//'landing_dtl' => LandingPage::select('id','name','image')->where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			];
		} else {
			//$image = Album::where('is_active', true)->orderBy('order', 'asc')->get();
			return [
				//'tiers' => QuantumTier::where('is_active', true)->get(),
				//'categories' => QuantumCategory::where('is_active', true)->get(),
				//'tags' => QuantumTag::all(),
				//'albums' => Album::where('is_active', true)->orderBy('order', 'asc')->get(),
				'programs' => Program::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			];
		}
	}
	public function playlists(Request $request)
	{
		// echo '1';
		//exit;
		if (isset($_GET['id'])) {
			//$image = Album::where('is_active', true)->where('id',$_GET['id'])->orderBy('order', 'asc')->get();	
			return [
				//'tiers' => QuantumTier::where('is_active', true)->get(),
				//'categories' => Category::where('is_active', true)->where('id',$_GET['id'])->get(),
				//'programs' => Program::orderBy('order', 'asc')->where('id',$_GET['id'])->get(),
				'playlists' => Playlist::orderBy('order', 'asc')->where('id', $_GET['id'])->get(),
				//'tags' => QuantumTag::all(),
				//'landing_dtl' => LandingPage::select('id','name','image')->where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			];
		} else {
			//$image = Album::where('is_active', true)->orderBy('order', 'asc')->get();
			return [
				//'tiers' => QuantumTier::where('is_active', true)->get(),
				//'categories' => QuantumCategory::where('is_active', true)->get(),
				//'tags' => QuantumTag::all(),
				//'albums' => Album::where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				'playlists' => Playlist::orderBy('order', 'asc')->get(),
			];
		}
	}
	public function discover(Request $request)
	{
		// echo '1';
		//exit;
		if (isset($_GET['id'])) {
			//$image = Album::where('is_active', true)->where('id',$_GET['id'])->orderBy('order', 'asc')->get();	
			return [
				//'tiers' => QuantumTier::where('is_active', true)->get(),
				//'categories' => Category::where('is_active', true)->where('id',$_GET['id'])->get(),
				//'programs' => Program::orderBy('order', 'asc')->where('id',$_GET['id'])->get(),
				//'playlists' => Playlist::orderBy('order', 'asc')->where('id',$_GET['id'])->get(),
				'discover' => Discover::where('id', $_GET['id'])->get()
				//'tags' => QuantumTag::all(),
				//'landing_dtl' => LandingPage::select('id','name','image')->where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			];
		} else {
			//$image = Album::where('is_active', true)->orderBy('order', 'asc')->get();
			return [
				//'tiers' => QuantumTier::where('is_active', true)->get(),
				//'categories' => QuantumCategory::where('is_active', true)->get(),
				//'tags' => QuantumTag::all(),
				//'albums' => Album::where('is_active', true)->orderBy('order', 'asc')->get(),
				//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
				//'tracks' => Track::orderBy('order', 'asc')->get(),
				'discover' => Discover::all()
			];
		}
		return [
			//'tiers' => QuantumTier::where('is_active', true)->get(),
			//'categories' => QuantumCategory::where('is_active', true)->get(),
			//'tags' => QuantumTag::all(),
			//'albums' => Album::where('is_active', true)->orderBy('order', 'asc')->get(),
			//'programs' => QuantumProgram::orderBy('order', 'asc')->get(),
			//'tracks' => Track::orderBy('order', 'asc')->get(),
			//'playlists' => QuantumPlaylist::orderBy('order', 'asc')->get(),
			'discover' => Discover::all()
		];
	}
	public function image(Request $request)
	{
		$img = $_GET['img'];
		//if($_SERVER['REMOTE_ADDR'] == '27.54.183.61'){
		//}
		$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));;
		if ($ext != 'jpg' || $ext != 'png') {
			list($a, $img) = explode("img=", $_SERVER['REQUEST_URI']);
		}
		//print_r($img);//print_r($_GET['img']);print_r($img); 
		//exit;
		$img = 'https://www.qicoilapi.ingeniusstudios.com/storage/app/public/uploads/' . str_replace(' ', '%20', $img);
		$imgsize = getimagesize($img);
		header('Content-Type: image/jpeg');

		//header('Content-Type: '.$imgsize['mime']);

		//print_r($imgsize);//die;

		//if($imgsize[0] > 300 ){

		$percent = 0.2;

		list($width, $height) = $imgsize;

		$new_width = (!empty($_GET['w'])) ?  $_GET['w'] : 200; //$width * $percent;

		$new_height = (!empty($_GET['h'])) ?  $_GET['h'] : 200; //$height * $percent;

		//echo 'mahesh'.$new_width.'--'.$new_height;exit;

		$image_p = imagecreatetruecolor($new_width, $new_height);

		if (strpos($img, ".jpg") || strpos($img, ".jpeg")) {
			$image = imagecreatefromjpeg($img);
		}
		if (strpos($img, ".png")) {

			$image = imagecreatefrompng($img);
		}

		if (strpos($img, ".gif")) {

			$image = imagecreatefromgif($img);
		}

		//	print_r($image);die;

		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);



		// Output

		imagejpeg($image_p, null, 100);

		//	}else {

		//	readfile($img);die;

		//}
	}



	public function apk()
	{
		$files = \Storage::disk('public')->files('apk_quantum');
		$urls = [];
		foreach ($files as $file) {
			if (strpos($file, '.apk') === false) continue;
			$urls[] = 'https://www.combined-quantum.ingeniusstudios.com/storage/app/public/' . $file;
		}
		return $urls;
	}

	public function purchase()
	{
		//print_r($_SERVER);die;
		if ($_SERVER['HTTP_USER_AGENT'] == 'Zapier') {


			//print_r($_POST);
			//print_r($_POST);
			$myArray = explode(',', $_POST['sku']);
			//$sku = '('.$_POST['sku'].')';
			//print_r($myArray);
			//die;
			$user = User::where('email', $_POST['email'])->pluck('id')->all();
			$tier = Tier::whereIn('sku', $myArray)->pluck('id')->all();
			$album = Category::whereIn('sku', $myArray)->pluck('id')->all();
			//print_r($user['0']);
			//print_r($album);
			//print_r($tier);
			$albums = Category::whereIn('tier_id', $tier)->pluck('id')->all();
			//print_r($albums);
			$album = array_unique(array_merge($album, $albums), SORT_REGULAR);;
			//print_r($album);
			//die;
			if (!empty($album)) {
				foreach ($tier as $kk => $vv) {
					$user3 = ExtraTier::where('user_id', $user['0'])->where('tier_id', $vv)->pluck('id')->all();
					if (empty($user3)) {
						$user4 = ExtraTier::create([
							'user_id' => $user['0'],
							'tier_id' => $vv
						]);
					}
				}

				foreach ($album as $k => $v) {
					//print_r($v);die;
					if (!empty($v)) {
						$user2 = Extra::where('user_id', $user['0'])->where('category_id', $v)->pluck('id')->all();
						if (empty($user2)) {
							$user1 = Extra::create([
								'user_id' => $user['0'],
								'category_id' => $v
							]);
						}
					}
				}
			}
		}



		//print_r($user1['0']);


		else {
			return ['message' => 'Unauthorized access'];
		}
	}


	public function save_playlist()
	{
		//print_r('123');die;

		$name = $_POST['name'];
		$tracks = $_POST['tracks'];
		$user_id = $_POST['user_id'];
		if ($user_id == 0) {
			return ['message' => 'You cannot change this playlist'];
		}
		//print_r($name);//die;
		//print_r($tracks);die;
		//print_r($user_id);die;
		if (isset($_POST['playlist_id'])) {
			$playlist_id = $_POST['playlist_id'];
			$playlist = Program::where('id', $playlist_id)->pluck('id')->all();
			if (empty($playlist)) {
				return ['message' => 'No such Playlist exists'];
			} else {
				//return ['message' => '111No such Playlist exists'];
				$program = Program::where('id', $playlist_id)->where('user_id', $user_id)->update([
					'name' => $name,
					'tracks' => '[' . $tracks . ']'
					//'order' => 0
					//'user_id' => $user_id
				]);

				return ['message' => 'Playlist Updated'];
			}
		}

		//if(){

		//}
		//else(){
		$program = Program::create([
			'name' => $name,
			'tracks' => '[' . $tracks . ']',
			'order' => 0,
			'user_id' => $user_id
		]);
		//}


		return $program;
	}
	public function list_playlist()
	{
		//print_r('123');die;
		$user_id = $_POST['user_id'];
		//print_r($user_id);die;
		$playlist = Program::whereIn('user_id', [0, $user_id])->get();
		//print_r($playlist);die;
		return $playlist;
	}
	public function delete_playlist()
	{
		//print_r('123');die;
		$playlist_id = $_POST['playlist_id'];
		$user_id = $_POST['user_id'];
		$playlist = Program::where('id', $playlist_id)->where('user_id', $user_id)->delete();
		//return $playlist;
		if ($playlist == 1) {
			return ['message' => 'Playlist Deleted'];
		} else {
			return ['message' => 'No Playlist exists for this playlist_id'];
		}
	}

	public function support_form()
	{
		//print_r('123');die;
		$name = $_GET['name'];
		$phone = $_GET['phone'];
		$email = $_GET['email'];
		$subject = $_GET['subject'];
		$message = $_GET['message'];
		//$headers = "MIME-Version: 1.0" . "\r\n";
		//$headers .= "Content-type: text/html; charset=utf-8\r\n";
		//$headers .= "From: ".$email."  <'".$name."'>";

		//print_r($name);
		//print_r($phone);
		//print_r($email);
		//print_r($subject);
		//print_r($headers);
		//exit;

		$msg = "Name: " . $name . " \r\nFrom: " . $email . " \r\nPhone Number: " . $phone . " \r\nMessage: " . $message;
		//print_r($msg);
		//exit;
		$mail = mail("support@qilifestore.com", $subject, $msg);
		//$mail = mail("arnab@worldwidewebsolution.com", $subject, $msg);

		if ($mail != 1) {
			$response = array("fetch_flag" => "0", "message" => "Unable to send mail");
			print_r(json_encode(array('support_details' => array($response))));
			exit;
		} else {
			$response = array("fetch_flag" => "1", "message" => "Mail Sent");
			print_r(json_encode(array('support_details' => array($response))));
			exit;
		}
	}


	public function saveFreeAlbum()
	{
		//print_r($_POST);//die;

		$user_id = $_GET['user_id'];
		$album_id = $_GET['album_id'];
		if (empty($user_id) || $user_id == 0) {
			return ['message' => 'user_id is required'];
		}
		if (empty($album_id) || $album_id == 0) {
			return ['message' => 'album_id is required'];
		}

		$users = User::where('id', $user_id)->pluck('is_free_album')->all();
		if (!empty($users[0])) {
			$is_free_album = explode(',', $users[0]);
			foreach (array_keys($is_free_album, $album_id, true) as $key) {
				unset($is_free_album[$key]);
			}
			$final_album_arr = array_merge($is_free_album, array($album_id));
			$free_album_ids = implode(',', $final_album_arr);
		} else {
			$free_album_ids = $album_id;
		}
		//		print_r($free_album_ids);die;

		$user = User::where('id', $user_id)->update([
			'is_free_album' => $free_album_ids,
		]);

		return ['message' => 'Free Album Added'];
	}


	public function checkFreeAlbum(Request $request)
	{
		//		print_r($_POST);//die;

		//		print_r($_SERVER);die;
		$user_id = $_GET['user_id'];
		if (empty($user_id) || $user_id == 0) {
			return ['message' => 'user_id is required'];
		}

		$user_albums = User::where('id', $user_id)->pluck('is_free_album')->all();
		$user_albums = explode(',', $user_albums[0]);
		$user = User::where('id', $user_id)->get()->toArray();
		//		if($_SERVER['REMOTE_ADDR'] == '27.54.183.61'){
		$unlocked_albums = $user[0]['unlocked_albums'];
		if (!empty($unlocked_albums)) {
			$final_album_arr = array_merge($user_albums, $unlocked_albums);
		} else {
			$final_album_arr = $user_albums;
		}
		//		print_r($user_albums);//die;
		//		print_r($unlocked_albums);//die;
		//		print_r($final_album_arr);die;
		//		}

		$albums = Album::whereIn('id', $final_album_arr)->orderBy('order', 'asc')->get()->toArray();
		//		$albums = Album::whereIn('id', $user_albums)->orderBy('order', 'asc')->get()->toArray();

		if (!empty($albums)) {
			return ['albums' => $albums];
		} else {
			return ['message' => 'No Album Found'];
		}
	}

	public function instructions(Request $request)
	{

		$instruction = Instruction::orderBy('id', 'asc')->get()->toArray();
		//		print_r($instruction);die;
		$url = 'https://www.combined.ingeniusstudios.com/public/admin/elfinder/connector?_token=APS89mlXr9p1UmkxTdlkuhmrdO7AqIpAQqX4pwgL&cmd=file&target=l4_SW1hZ2VzLnBkZg';

		if (!empty($instruction)) {
			return ['url' => $url];
		} else {
			return ['message' => 'No Instruction Found'];
		}
	}

	public function save_mood(Request $request)
	{

		//		print_r($_GET);

		if (empty($_GET['user_id']) || $_GET['user_id'] == 0) return ['message' => 'user_id is required'];
		if (empty($_GET['mood_name'])) return ['message' => 'mood_name is required'];
		if (empty($_GET['comment'])) return ['message' => 'comment is required'];
		if (empty($_GET['date'])) return ['message' => 'date is required'];

		$user_id = $_GET['user_id'];
		$mood_name = $_GET['mood_name'];
		$comment = $_GET['comment'];
		$date = $_GET['date'];

		$moods = Mood::where('user_id', $user_id)->where('date', $date)->get()->toArray();
		//		print_r($moods);die;
		if (!empty($moods)) {
			$mood = Mood::where('date', $date)->update([
				'mood_name' => $mood_name,
				'comment' => $comment,
			]);
			if ($mood) {
				$response = [
					'rsp_title' => 'Success',
					'rsp_msg' => 'Mood Updated',
					'fetch_flag' => '1',
				];
			}
		} else {
			$mood = Mood::create([
				'user_id' => $user_id,
				'mood_name' => $mood_name,
				'comment' => $comment,
				'date' => $date,
				'created_at' => date('Y-m-d H:i:s')
			]);
			if ($mood) {
				$response = [
					'rsp_title' => 'Success',
					'rsp_msg' => 'Mood Added',
					'fetch_flag' => '1',
				];
			}
		}
		if (empty($response)) {
			$response = [
				'rsp_title' => 'NOTIFICATION',
				'rsp_msg' => 'Mood�name not found',
				'fetch_flag' => '-1',
			];
		}
		return ['moods_dtl' => array($response)];
	}

	public function get_mood(Request $request)
	{

		//		print_r($_GET);

		if (empty($_GET['user_id']) || $_GET['user_id'] == 0) return ['message' => 'user_id is required'];
		if (empty($_GET['year'])) return ['message' => 'year is required'];
		if (empty($_GET['month'])) return ['message' => 'month is required'];

		$user_id = $_GET['user_id'];
		$year = $_GET['year'];
		$month = $_GET['month'];

		$date = $year . '-' . $month;
		$first = date("Y-m-01", strtotime($date));
		$last = date("Y-m-t", strtotime($date));
		//		echo $first.'*******'.$last;die;

		$moods = Mood::where('user_id', $user_id)->where('date', '>=', $first)->where('date', '<=', $last)->get()->toArray();
		//		print_r($moods);die;
		$final_moods = array();
		foreach ($moods as $k => $v) {
			$final_moods[] = $v;
			$final_moods[$k]['date'] = date("Y-m-d", strtotime($v['date']));
			//			unset($v['created_at']);
		}
		//		print_r($final_moods);die;	
		/*if(!empty($final_moods)) {
			$response = [
				'rsp_title' => 'NOTIFICATION',
				'rsp_msg' => 'Moods Found',
				'fetch_flag' => '1',
				'moods' => $final_moods
			];
		}else{
			$response = [
				'rsp_title' => 'NOTIFICATION',
				'rsp_msg' => 'No Moods Found',
				'fetch_flag' => '0',
				'moods' => ''
			];
		}*/
		return ['moods_dtl' => ($final_moods)];
	}


	public function random_albums(Request $request)
	{

		if (empty($_GET['user_id']) || $_GET['user_id'] == 0) return ['message' => 'user_id is required'];

		$limit = 4;

		$user_albums = UserAlbum::where('user_id', $_GET['user_id'])->get()->toArray();
		//		print_r($user_albums);die;
		$user_album_ids = array();
		foreach ($user_albums as $k => $v) {
			$user_album_ids[] = $v['album_id'];
		}
		//		$user_album_ids = array(2,138,3,137,1,221,4,5,6,7,88,91,95,139,140,18,19,20,21,22,8,10,11,12,13,14,15,16,17,9,141,142,143,144,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,78,72,76,145,90,74,75,92,79,84,86,87,81,83,82,73,62,94,96,97,93,89,41,85,80,146,147,148,149,101,45,150,151,152,153,154,155,156,157,158,159,68,69,70,71,42,43,98,44,51,77,47,61,63,64,65,66,160,161,162,58,57,60,59,56,55,163,164,165,52,49,50,53,54,67,48,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,193,194,99,100,102,103,104,105,106,195,196,197,198,199,200,201,202,46,203,204,205,206,207,208,209,210,211,212,213,126,121,125,120,124,122,123,128,131,134,133,135,136,130,132,129,127,107,108,109,110,111,112,113,114,118,119,117,115,116,225,218,219,220,226,229);
		//		$albums = Album::where('is_active', true)->whereNotIn('id', $user_album_ids)->get()->random($limit)->toArray();
		$albums = Album::where('is_active', true)->whereNotIn('id', $user_album_ids)->orderByRaw("RAND()")->get()->take($limit)->toArray();
		//		print_r($albums);die;

		$albums_arr = $ids = array();
		$i = $j = 0;
		foreach ($albums as $k => $v) {
			$i++;
			if ($i == 1) {
				$url = 'https://www.combined.ingeniusstudios.com/public/api/image?w=600&h=600&img=' . $v['audio_folder'] . '/' . $v['image'];
			} else {
				$url = 'https://www.combined.ingeniusstudios.com/public/api/image?w=&h=&img=' . $v['audio_folder'] . '/' . $v['image'];
			}
			$albums_arr1['id'] = $v['id'];
			$albums_arr1['category_id'] = $v['category_id'];
			$albums_arr1['name'] = $v['name'];
			$albums_arr1['image'] = $url;
			$albums_arr1['audio_folder'] = $v['audio_folder'];
			$albums_arr1['sku'] = $v['sku'];
			$albums_arr1['is_free'] = $v['is_free'];
			$albums_arr1['order'] = $v['order'];
			$albums_arr1['updated_at'] = $v['updated_at'];
			$albums_arr1['sort_desc'] = implode(', ', $v['descriptions']);
			$albums_arr1['description'] = $v['descriptions'];
			$albums_arr1['tag'] = $v['tag'];
			$albums_arr1['tracks'] = $v['tracks'];
			$albums_arr1['lock'] = true;
			$albums_arr[] = $albums_arr1;
			$ids[] = $v['id'];
		}
		//		print_r($albums_arr);die;
		if ($i != $limit) {
			$limit = $limit - $i;
			$albums = Album::where('is_active', true)->whereNotIn('id', $ids)->orderByRaw("RAND()")->get()->take($limit)->toArray();
			//			$albums_arr = array();
			foreach ($albums as $k => $v) {
				$j++;
				if (empty($ids) && $j == 1) {
					$url = 'https://www.combined.ingeniusstudios.com/public/api/image?w=600&h=600&img=' . $v['audio_folder'] . '/' . $v['image'];
				} else {
					$url = 'https://www.combined.ingeniusstudios.com/public/api/image?w=&h=&img=' . $v['audio_folder'] . '/' . $v['image'];
				}
				$albums_arr2['id'] = $v['id'];
				$albums_arr2['category_id'] = $v['category_id'];
				$albums_arr2['name'] = $v['name'];
				$albums_arr2['image'] = $url;
				$albums_arr2['audio_folder'] = $v['audio_folder'];
				$albums_arr2['sku'] = $v['sku'];
				$albums_arr2['is_free'] = $v['is_free'];
				$albums_arr2['order'] = $v['order'];
				$albums_arr2['updated_at'] = $v['updated_at'];
				$albums_arr2['sort_desc'] = implode(', ', $v['descriptions']);
				$albums_arr2['description'] = $v['descriptions'];
				$albums_arr2['tag'] = $v['tag'];
				$albums_arr2['tracks'] = $v['tracks'];
				$albums_arr2['lock'] = false;
				$albums_arr[] = $albums_arr2;
			}
		}

		//		print_r($albums_arr);die;
		return ['albums' => $albums_arr];
	}


	public function subscription(Request $request)
	{

		//		print_r($_GET);
		$response = array();

		if (empty($_POST['user_id']) || $_POST['user_id'] == 0) $response = array('fetch_flag' => -1, 'rsp_title' => 'NOTIFICATION', 'rsp_msg' => 'User ID is required');
		elseif (empty($_POST['tier_id']) || $_POST['tier_id'] == 0) $response = array('fetch_flag' => -1, 'rsp_title' => 'NOTIFICATION', 'rsp_msg' => 'Tier ID is required');
		elseif (empty($_POST['category_id']) || $_POST['category_id'] == 0) $response = array('fetch_flag' => -1, 'rsp_title' => 'NOTIFICATION', 'rsp_msg' => 'Category ID is required');
		elseif (empty($_POST['subscription_amt'])) $response = array('fetch_flag' => -1, 'rsp_title' => 'NOTIFICATION', 'rsp_msg' => 'Subscription Amount is required');
		elseif (empty($_POST['transaction_date'])) $response = array('fetch_flag' => -1, 'rsp_title' => 'NOTIFICATION', 'rsp_msg' => 'Transaction Date is required');
		elseif (empty($_POST['transaction_id'])) $response = array('fetch_flag' => -1, 'rsp_title' => 'NOTIFICATION', 'rsp_msg' => 'Transaction ID is required');
		elseif (empty($_POST['product_id'])) $response = array('fetch_flag' => -1, 'rsp_title' => 'NOTIFICATION', 'rsp_msg' => 'Product ID is required');
		elseif (empty($_POST['transaction_receipt'])) $response = array('fetch_flag' => -1, 'rsp_title' => 'NOTIFICATION', 'rsp_msg' => 'Transaction Receipt is required');

		if (empty($response)) {
			/*if($_POST['tier_id'] == 1){
				$tier_id = 1;
			}else {
				$tier_id = '';
			}*/
			$subscription = Subscription::create([
				'user_id' => $_POST['user_id'],
				'tier_id' => $_POST['tier_id'],
				'category_id' => $_POST['category_id'],
				'subscription_amt' => $_POST['subscription_amt'],
				'transaction_date' => $_POST['transaction_date'],
				'transaction_id' => $_POST['transaction_id'],
				'product_id' => $_POST['product_id'],
				'transaction_receipt' => $_POST['transaction_receipt'],
				'created_at' => date('Y-m-d H:i:s')
			]);
			if ($subscription) {
				if ($_POST['tier_id'] == 1) {
					$user_tier = UserTier::where('user_id', $_POST['user_id'])->where('tier_id', $_POST['tier_id'])->get()->toArray();
					if (empty($user_tier)) {
						$tier_add = UserTier::create([
							'user_id' => $_POST['user_id'],
							'tier_id' => $_POST['tier_id'],
						]);
						$category_arr = array(1, 2, 3, 4, 5, 6, 7);
						foreach ($category_arr as $v) {
							$category_add = UserCategory::create([
								'user_id' => $_POST['user_id'],
								'category_id' => $v,
							]);
						}
					}
					/*$user_category = UserCategory::where('user_id', $_POST['user_id'])->where('category_id', $_POST['category_id'])->get()->toArray();
					if(empty($user_category)){
						$category_add = UserCategory::create([
									'user_id' => $_POST['user_id'],
									'category_id' => $_POST['category_id']
							]);
					}*/
				} else {
					$user_category = UserCategory::where('user_id', $_POST['user_id'])->where('category_id', $_POST['category_id'])->get()->toArray();
					if (empty($user_category)) {
						$category_add = UserCategory::create([
							'user_id' => $_POST['user_id'],
							'category_id' => $_POST['category_id']
						]);
					}
				}
				$response = [
					'rsp_title' => 'NOTIFICATION',
					'rsp_msg' => 'Subscription Added',
					'fetch_flag' => 1,
				];
			} else {
				$response = [
					'rsp_title' => 'NOTIFICATION',
					'rsp_msg' => 'Subscription Not Added',
					'fetch_flag' => -1,
				];
			}
		}

		return ['subscribe_dtl' => array($response)];
	}
}
