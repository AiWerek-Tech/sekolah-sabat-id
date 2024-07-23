function playtime(e,times){times=times.split('|');var element=$('#'+e.getAttribute('id'));element.on('loadeddata',function(){console.log('playing');e.currentTime=times[0];if(times[1]!=null&&times[1]>0){element.on('timeupdate',function(){console.log('timeupdate fired');if(this.currentTime>=times[1]){this.pause();this.currentTime=times[0];}})}})}
$(document).ready(function(){$('#trigger').click(function(){if($('nav').hasClass('open')){$('nav, #trigger, #cse-search-box,#search-fence').removeClass('open');$('header,.view,.bg-page').removeClass('fade');}
else{$('nav, #trigger, #cse-search-box,#search-fence').addClass('open');$('header,.view,.bg-page').addClass('fade');}})
$('<span class="trigger">More</span>').insertBefore('ul.children:not(.none)');$('<span class="trigger open">Less</span>').insertBefore('ul.none');$('ul.children:not(.none), ul.drawer:not(.open)').hide();$('ul.single ul.lessons:first-child h3.trigger').addClass('open');$('aside .trigger').click(function(){if($(this).hasClass('open')){$(this).text('More').removeClass('open').next('ul').slideUp(500);}
else{$(this).text('Less').addClass('open').next('ul').slideDown(500);}})
$('.ltrigger').click(function(){if($(this).hasClass('open')){$(this).removeClass('open').next('.drawer').slideUp(500);}
else{$(this).addClass('open').next('.drawer').slideDown(500);}})
$('.page_content img').each(function(){if($(this).attr('alt')!=undefined&&$(this).attr('alt').length){var caption=$(this).attr('alt');var thisclass=$(this).attr('class');$(this).removeAttr('class style');var captioned='<div class="img-box '+thisclass+'">'+$(this)[0].outerHTML+'<p>'+caption+'</p></div>';$(this).replaceWith(captioned);}})
$('.content-fence a').click(function(){var to=$(this).attr('href');var file=to.match(/\/[^.]*.pdf/g);if(file){var info='Direct link: '+file;ga('send','event','File','View',info);console.log(info);}})
$('li.file').on('click','a',function(){if($(this).hasClass('file-1')){var title='Weblink: '+$(this).text();var file='Alias: '+$(this).attr('href');}
else{var title='Static Resource: '+$(this).text();var file='File: '+$(this).attr('href');}
var info=title+' | '+file;ga('send','event','File','View',info);console.log(info);});$('#manager-util a').click(function(){var link=$(this).attr('rel');$('body').prepend('<div style="display:none" class="overlay-mgr"><span class="mgr-close" title="reload">X</span><iframe  width="95%" height="95%" src="'+link+'" frameborder="0"></iframe></div>')
$('.overlay-mgr').fadeIn(500);})
$('body').on('click','.mgr-close',function(){var reload=$(this).attr('title');$('.overlay-mgr').fadeOut(500,function(){$('.overlay-mgr').remove();if(reload=='reload'){location.reload();}})})
var yselect=$('#lesson-year');var qselect=$('#lesson-quarter');var qnames=['First Quarter','Second Quarter','Third Quarter','Fourth Quarter']
if(typeof archives!='undefined'){$.each(archives.all,function(y,q){yselect.prepend('<option value="'+y+'">'+y+'</option>').val(archives.current.year);})
quarters(archives.all[archives.current.year],0);}
function quarters(q,v){qselect.empty();$.each(q,function(i,q){console.log(i+':'+q);qselect.append('<option value="'+(q)+'">'+qnames[q-1]+'</option>');})
if(v==0){qselect.val(archives.current.quarter);}}
yselect.on('change',function(){var y=$(this).val();quarters(archives.all[y],1);})
$('.vim-current').slick({slidesToShow:1,slidesToScroll:1,arrows:false,fade:true,asNavFor:'.vim-nav'});$('.vim-nav').slick({slidesToShow:3,slidesToScroll:1,asNavFor:'.vim-current',dots:true,centerMode:true,focusOnSelect:true});$('ul.topics li:first-child, ul.resourcetypes li:first-child').addClass('selected');$('li.type').on('click tap',function(){var type=$(this).attr('itemid');$('ul.topics li, ul.resourcetypes li').removeClass('selected');$(this).addClass('selected');$('li.type-'+type).addClass('selected');})
$('a.audio').on('click',function(){var section=$(this).next('section');if($(this).parent('.withaudio').hasClass('open')){$(this).parent('.withaudio').removeClass('open')
section.slideUp(300);}else{$(this).parent('.withaudio').addClass('open')
section.slideDown(300);}
var audio=section.find('.audio-element');audio.each(function(){var params=$(this).attr('data');var p=params.split('|');var id=p[1]+p[2]+p[3]+p[4];var item=$(this);$.getJSON('/dbt/getaudio.php?a='+params,function(data){var times="'"+data.start+"|"+data.end+"'";var ae='<audio id="'+id+'" src="'+data.path+'" controls="controls" data="'+params+'" onloadedmetadata="playtime(this,'+times+')">';item.replaceWith(ae);var thisaudio=$('#'+id);})})})
$('#email').on('change',function(){var email=$(this).val();$('#username').val(email);console.log(email);})
$('.c-article p img').each(function(){var w=$(this).width();var src=$(this).attr('src');console.log(src);if(w>0&&w<1500){$(this).attr('src','phpthumbsup/w/1000/src/'+src);}})
$('[name="obfuscate"]').each(function(){var email=$(this).attr('data-e').split('||');$(this).attr('href','mailto:'+email[0]+'@'+email[1]);})});