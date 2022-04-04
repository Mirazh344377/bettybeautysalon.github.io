/**
 * Show large images notification
 */
;
(function (Themify, document) {
    'use strict';
    Themify.on('tf_large_images_init', function (items) {
		for(let i=items.length-1;i>-1;--i){
			Themify.imagesLoad(items[i], function (instance) {
				 let item=instance.elements[0],
					svgWrap=document.createElement('span'),
					text=document.createElement('span');
				svgWrap.className='tf_large_image_alert tf_rel tf_hide';
				svgWrap.tabIndex=-1;
				text.className='tf_large_image_msg tf_box tf_textl tf_hide';
				text.innerHTML=themify_vars.lgi.replace('%w',item.naturalWidth).replace('%h',item.naturalHeight);
				svgWrap.appendChild(text);
				svgWrap.addEventListener('click',function(e){
					e.stopImmediatePropagation();
					e.preventDefault();
				});
				item.parentNode.insertBefore(svgWrap,item);
			});
		}
    }).LoadCss(Themify.url + '/css/modules/large-image-alert.css');
})(Themify, document);
