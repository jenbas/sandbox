if (typeof(_evpLoad) === "undefined") {
  _evpAssetsLoaded = false;

  function _evpLoad(file, callback, disableAsyncLoading) {
	if(typeof disableAsyncLoading == 'undefined') var disableAsyncLoading = false;
	if(window._evpAssetsLoaded === true) {
		callback();
		return;
	}
	function asset_load() {
	  var s = document.createElement('script');
	  s.type = 'text/javascript';
	  var src = "http://www.executivevocabulary.com/video/player/" + file;
	  s.src = src;
	  var current_scripts = document.getElementsByTagName('script');
	  var inject = true;
	  for(i = 0; i < current_scripts.length; i++) {
			if(current_scripts[i].src == src) {
				inject = false;
				break;
			}
	  }
	  if(inject == true) {
			document.getElementsByTagName('head')[0].appendChild(s);
			var current_scripts = [s];
			var i = 0;
	  }
	  if(current_scripts[i].readyState) {
			current_scripts[i].attachEvent('onreadystatechange', function() {
				if (current_scripts[i].readyState == "loaded" || current_scripts[i].readyState == "complete") {
				if(typeof onEvpAssetsReady == 'function' && window._evpAssetsLoaded !== true) onEvpAssetsReady(EVP22Lib);
				window._evpAssetsLoaded = true;
				callback();
				}
			});
	  } else if(current_scripts[i].addEventListener) {
			current_scripts[i].addEventListener('load', function() {
				if(typeof onEvpAssetsReady == 'function' && window._evpAssetsLoaded !== true) onEvpAssetsReady(EVP22Lib);
				window._evpAssetsLoaded = true;
				callback();
			}, false);
	  }
	}
	if(false || disableAsyncLoading === true) {
		asset_load();
	} else if (window.attachEvent) window.attachEvent('onload', asset_load);
	else if(window.addEventListener) window.addEventListener('load', asset_load, false);
	else asset_load();
  }
}

if(_evpStorage === undefined) var _evpStorage = {};

_evpStorage['ZmluYWxvcmRlcnBhZ2UtMS5tcDQ='] = {"absolute":"http:\/\/www.executivevocabulary.com\/video\/","asset_location":"http:\/\/www.executivevocabulary.com\/video\/","id":"evp-c6b82f00da3e75cc3d56402d32e775b4","div_id":"evp-9039e05ff9d68c3443e2c351314a7493","bucket_name":"evp-4fb97c37b5598-a1358f73044478471c1f3383b8e5737d","file_id":"ZmluYWxvcmRlcnBhZ2UtMS5tcDQ=","type":"video","extension":null,"skin":{"leftUIWidth":40,"rightUIWidth":245,"rightUIWidthSmall":42,"playlistCSS":{},"playlistWrapperCSS":{"background-color":"#2A2A2A"},"playlistItemCSS":{"color":"#fff","background-color":"#474747","boxShadow":"none","border-radius":"5px"},"playlistItemWrapCSS":{"padding":"5px","text-align":"center"},"playlistHoverCSS":{"background-color":"#4F4F4F","color":"#E0E0E0","boxShadow":"0px 0px 10px #aaa"},"playlistPauseCSS":{"background-color":"#696969","color":"#000"},"playlistCurrentCSS":{"background-color":"#fff","box-shadow":"0px 0px 10px #fff"},"borderRadius":"0px","timeColor":"#ffffff","bufferGradient":"none","slowForward":true,"backgroundColor":"rgba(0, 0, 0, 0)","volumeSliderGradient":"none","slowBackward":false,"timeBorderRadius":20,"progressGradient":"none","time":true,"height":26,"volumeColor":"#4599ff","tooltips":{"marginBottom":5,"volume":true,"scrubber":true,"buttons":false},"fastBackward":false,"opacity":1,"timeFontSize":12,"bufferColor":"#a3a3a3","border":"0px","volumeSliderColor":"#ffffff","buttonColor":"#ffffff","mute":true,"backgroundGradient":"none","width":"100pct","display":"block","sliderBorder":"1px solid rgba(128, 128, 128, 0.7)","buttonOverColor":"#ffffff","fullscreen":true,"timeBgColor":"rgb(0, 0, 0, 0)","scrubberBarHeightRatio":0.4,"bottom":0,"stop":false,"zIndex":1,"sliderColor":"#000000","scrubberHeightRatio":0.6,"tooltipTextColor":"#ffffff","sliderGradient":"none","timeBgHeightRatio":0.8,"volumeSliderHeightRatio":0.6,"name":"controls","timeSeparator":" ","volumeBarHeightRatio":0.2,"left":"50pct","tooltipColor":"rgba(0, 0, 0, 0)","playlist":false,"durationColor":"#b8d9ff","play":true,"fastForward":true,"timeBorder":"0px solid rgba(0, 0, 0, 0.3)","progressColor":"#4599ff","volume":true,"scrubber":true,"volumeBorder":"1px solid rgba(128, 128, 128, 0.7)","builtIn":false},"finish":"0","local":null,"remote":true,"youtube":false,"youtube_id":false,"flowplayer_key":"d24e4e476462aa2902f","preview":false,"hasMetaData":true,"remote_location":"https:\/\/s3.amazonaws.com\/evfinalcompressed\/EV-Order-Page-Video-060312_v2.mp4","data":{"simple_page_text":"","width":"850","height":"479","player_colour":"#000000","bar_share_fbsubscribe_name":"","affiliate_promo_vendor":"","button_text_color":"#ffffff","button_body_color":"#000000","html_body_color":"#000000","simple_page_name":"","simple_page_images_1_link":"","simple_page_images_2_link":"","mid_roll_start_minutes":"0","mid_roll_start_seconds":"2","mid_roll_background":"#000000","mid_roll_text":"#ffffff","mid_roll_fb_intro":"","mid_roll_twitter_intro":"","mid_roll_twitter_tweet":"","password_protect_background":"#383838","password_protect_text":"#ffffff","password_protect_fb_intro":"","password_protect_twitter_intro":"","password_protect_twitter_tweet":"","password_protect_intro":"","password_protect_word":"","affiliate_id":"","simple_page_beauty_title":"","mid_roll_html":"","password_protect_html":"","allow_fullscreen":"true","autoBuffering":"true","shadows":"true","allow_pause":"true","autoPlay":"true","player_centre":"true","bar_share_facebook":"1","bar_share_twitter":"1","bar_share_digg":"1","button_body_translucent":"true","html_body_translucent":"true","skin":"modern-air","target":"ZmluYWxvcmRlcnBhZ2UtMS5tcDQ=","use_chapters":"0","finish":"0","mid_roll_start":"","use_conversions":"0","use_upsells":"0","scaling":"scale","control_type":"show","watermark_placement":"top-left","mid_roll_cookie":"0","password_protect_cookie":"0","elements":false},"embed_code":false,"affiliate_code":false,"reference_profile":"default","profile":"default","alternate_embed":false,"file_extension":null,"local_assets":"assets\/files\/","button":false,"project_name":"EasyVideoPlayer 2","project_website":"http:\/\/www.easyvideoplayer.com","affiliate_url":"http:\/\/www.easyvideoplayer.com","commercial":true,"free":false,"analytics":false,"analytics_tracker_id":null,"status":"","metainfo":{"nativeWidth":"1280","nativeHeight":"720","duration":"249.82349206349207","codec":{"framerate":"29.97002997002997","codec":"avc1","audioChannels":"2","audioCodec":"mp4a","audioSampleRate":"44100"},"duration_readable":"4 minutes, 9 seconds"}};
function _evpInit(id, options) {
  var d = true;
  if(typeof options == 'object' && options.enableAsyncLoading == true) d = false;
  _evpLoad("assets.js.php?v=2.3.3", function() {
		_evp22Go(id, options);
  }, d);
}

function _evpLightbox(id, options) {
  var d = true;
  if(typeof options == 'object' && options.enableAsyncLoading == true) d = false;
  _evpLoad("assets.js.php?v=2.3.3", function() {
		// Now load the CSS
		EVP22Lib('<link>', {
			rel: 'stylesheet',
			type: 'text/css',
			href: 'http://www.executivevocabulary.com/video/player/prettyPhoto-3.0.1/css/prettyPhoto.css?v=5'
		}).appendTo('head');
		// And proceed
		_evp22GoLightbox(id, options);
  }, d);
}