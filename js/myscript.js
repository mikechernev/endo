setMenuWidth = function() {
	$(".menu").each(function() {
		var maxWidth = 0;
		var parentId = "#"+$(this).parent().attr("id");
		$(parentId+" li").each(function () {
			if($(this).width() > maxWidth){
				maxWidth = $(this).width();
			}
		});
		maxWidth += 30;
		$(parentId+" li").width(maxWidth);
		var width = $(parentId+" li").length*maxWidth;
		$(parentId).width(width);
		if(parentId == "#access"){
			$("#branding hgroup").width(width);
			$("#content").width(width-30);
			var height = width*598/1061;
			$("#HomepageFeature #spotlight-slider.big").width(width-50).height(height+10);
			$("#HomepageFeature #spotlight-slider.big .spotlight-slider-image.big").each(function(n){
				$(this).css("left", n*(width-50));
			});
			$("#HomepageFeature #spotlight-slider .nav").css("top", height-40);
		}
	});
};

$(function() {
	setMenuWidth();
});