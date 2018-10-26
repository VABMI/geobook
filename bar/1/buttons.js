 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>







<script type="text/javascript">

let width;
let height;
let bool=true;
let bool1=false; /// gashlilia tu daxuruli
   $(".submitq1").hide();
    $(".search1").hide();
            					function refreshuse(){
 					

 							 width=document.body.clientWidth;
 							 height=document.documentElement.clientHeight;

						
					var x = document.getElementById("idnav");
								if(width<682&&bool){

								     //x.style.display = "block";
									 //x.style.width = "350px";

									 		   $("#toggle").show();
									 		     $(".submitq").hide();
									 		         $(".search").hide();

									 		         document.getElementById("idnav").style.paddingLeft = "13px";
									 		         document.getElementById("toggle").style.paddingTop = "8px";
									 		           document.getElementById("idnav").style.marginLeft = "400px";

									 		             document.getElementById("idnav").style.marginLeft = width-80+"px";
									 		             if(bool1==true){   $(".submitq1").show();
  																			  $(".search1").show();}

								}

								else if(width<960&&width>=682)
									{	$(".submitq1").hide();
		    												$(".search1").hide();

											  document.getElementById("toggle").style.paddingTop = "8px";
										//	$("#toggle").show();

										 $(".submitq").hide();

										 for(let o=1;o<=4;o++)
										 {

										 	 $("#"+o).show();
										 }


										 $("#toggle").hide();

										 		bool=true;
									}




								else if(width>=960){
									$(".submitq1").hide();
		    												$(".search1").hide();
 						//x.style.width = "350%";
 						   $("#toggle").hide();
 						   			   $(".submitq").show();
 						   			     $(".search").show();
 						   			     	  document.getElementById("idnav").style.marginLeft = width-966+"px";

 						   		//	let Xnav=document.getElementById(idnav);     


								}


							






         					

								


                              setTimeout(refreshuse,10);





         					}
         					refreshuse();





									function	myFunction ()
         										{ 
         												if(bool){
         								  document.getElementById("div1").style.marginLeft = width/2+"px";
         								  document.getElementById("div1").style.width=width/2+"px";
         								  document.getElementById("idnav").style.marginLeft = (width/2)+"px";bool=false;
         								  bool1=true;

         								    $(".submitq1").show();
   											 $(".search1").show();
         										} else if(bool==false)
		         										{  $(".submitq1").hide();
		    												$(".search1").hide();

		         												document.getElementById("div1").style.marginLeft = width+"px";
		         												bool=true;
		         												bool1=false;
		         										}
         											
         										}
         				
</script>


