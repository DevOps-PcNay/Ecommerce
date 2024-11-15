// GRID y List
$(document).on("click",".btnView", function(){	
	var type = $(this).attr("attr-type");
	var btnType = $("[attr-type]")
	var index = $(this).attr("attr-index");

	//console.log("type ",type)
	if (type == "list")
	{
		$(".grid-"+index).hide()
		$(".list-"+index).show()
	}

	if (type == "grid")
		{
			$(".list-"+index).hide()
			$(".grid-"+index).show()
		}
	
		btnType.each(function(i){
			if($(btnType[i]).attr("attr-index") == index)
			{
				$(btnType[i]).removeClass("bg-white")
			}
			
		})


		//$(this).addClass("bg-green")
		//$("[type='"+type+"']").removeClass("bg-white")
	

})
