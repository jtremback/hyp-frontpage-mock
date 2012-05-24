

$(document).ready(function() {
  // Bind an event to window.onhashchange that, when the hash changes, gets the
  // hash and adds the class "selected" to any matching nav link.
  $(window).hashchange( function(){
    var hash = location.hash;
    // Set the page title based on the hash.
    document.title = 'The hash is ' + ( hash.replace( /^#/, '' ) || 'blank' ) + '.';

    $('.grid:visible').not(hash).fadeOut(function () {
      $('.grid' + hash).fadeIn();
    });
  });
  // Hide the invisible things ASAP on page load.
  $('.grid').not(location.hash).hide()
});


//TWEETBOX SETUP CODE
jQuery(function($){
  $(".tweet").tweet({
    join_text: "auto",
    username: "seaofclouds",
    avatar_size: 48,
    count: 3,
    auto_join_text_default: "we said,",
    auto_join_text_ed: "we",
    auto_join_text_ing: "we were",
    auto_join_text_reply: "we replied",
    auto_join_text_url: "we were checking out",
    loading_text: "loading tweets..."
  });
});


//COLLAPSER SETUP CODE
$(function() {
    $('#navlist').collapsible({
        effect: 'slide',             // The effect to use when expanding and collapsing the menu.
        initialCollapse: true       // When true, collapses the menu when the page loads.
    });
});


//  //VIEW SWITCHER
//  //catches clicks on heatmap tab
//  $(".hyp-heatmap_tab").click(function() {
//    //adjust margin
//    $("#source").css("margin-right", "510px");
//    //shows sidepane
//    $(".hyp-sidepane").show();
//    //shows bucket
//    $(".hyp-bucket").show();
//    //remembers that view is bucket
//    view = "bucket";
//  });

//    //catches clicks on summary
//  $(".hyp-xb9-s").click(function() {
//    //hides bucket
//    $(".hyp-bucket").hide();
//    //shows detail
//    $(".hyp-xb9-d").show();
//    //remembers that view is detail
//    view = "detail";
//  });


//  //CONTENT CLICK VIEWSTEPPER
//  //catches clicks on page content
//  $("#content").click(function(e) {

//    //Bucket to heatmap view
//    //checks if view is bucket
//    if (view == "bucket") {
//      //hides sidepane
//      $(".hyp-sidepane").hide();
//      //shows bucket
//      $(".hyp-bucket").hide();
//      //resets source margin
//      $("#source").css("margin-right", "0px");
//      //remembers that view is heatmap
//      view = "heatmap";
//    }

//    //detail to bucket view
//    //checks if view is detail
//    else if(view == "detail") {
//      //shows bucket
//      $(".hyp-bucket").show();
//      //hides detail
//      $(".hyp-detail").hide();
//      //hides writer
//      $(".hyp-writer").hide();
//      //remembers that view is bucket
//      view = "bucket";
//    }

//    //adder to heatmap view
//    //check if view adder
//    else if(view == "adder") {
//      //hide adder
//      $(".hyp-adder").hide();
//      //change to heatmap view
//      view = "heatmap"
//    }
//  });

//  //CONTENT SELECT ADDERPOP
//  //catches mouseup (should use select, not working)
//  $("#source").mouseup(function(e) {
//    //check if heatmap view
//    if(view == "heatmap") {
//      //show adder
//      $(".hyp-adder").show();
//      //position adder to cursor
//      $(".hyp-adder").css({"left": e.pageX, "top": e.pageY});
//      //change to adder view
//      view = "adder"
//    }
//  });

//  //ADDERCLICK ANNOTATE
//  //catches click
//  $(".hyp-adder> .hyp-write").click(function() {
//    //hide adder
//    $(".hyp-adder").hide();
//    //shows sidepane
//    $(".hyp-sidepane").show();
//    //shows detail
//    $(".hyp-n3w-d").show();
//    //shows writer
//    $(".hyp-writer").show();
//    //remembers that view is detail
//    view = "detail";
//  });

//  //COMMENT COLLAPSER
//  $(".hyp-threadexp").click(function() {
//    //Traverses to collapsed view and fades toggles
//    $(this).parents(".hyp-widget:eq(0)").find(".hyp-collapsed").toggle();
//    //Traverses to all full views below comment and shrinks them
//    $(this).parents(".hyp-widget:eq(0)").find(".hyp-full").toggle();
//    //Switches plus/minus
//    $(this).toggleClass(".hyp-closed");
//  });

//  //WRITER DISPLAY
//  $(".hyp-write").click(function() {
//    //Shows writer
//    $(this).parents(".hyp-widget:eq(0)").find(".hyp-writer:eq(0)").fadeIn();
//  });

//  $(".hyp-delete").click(function() {
//    //Hides writer
//    $(this).parents(".hyp-writer:eq(0)").fadeOut();
//  });

//  //CONTROL DISPLAY
//  $(".hyp-nothread").mouseenter(function() {
//    //Shows controls
//    $(this).children(".hyp-meta").children(".hyp-fakecontrols").fadeIn(200);
//  });
//  $(".hyp-nothread").mouseleave(function() {
//    //Hides controls
//    $(this).children(".hyp-meta").children(".hyp-fakecontrols").fadeOut(500);
//  });



////HOVER HILIGHTS
//  $(".hyp-xb9-s").hover(function() {
//   $(".hyp-xb9").toggleClass(".hyp-hl_negative");
//  });

//  $(".hyp-zb3-s").hover(function() {
//   $(".hyp-zb3").toggleClass(".hyp-hl_positive");
//  });

//  $(".hyp-cd6-s").hover(function() {
//   $(".hyp-cd6").toggleClass(".hyp-hl_negative");
//  });

//  $(".hyp-wf4-s").hover(function() {
//   $(".hyp-wf4").toggleClass(".hyp-hl_neutral");
//  });


////STANCE TOGGLER
//  $(".hyp-scorecontrol> .hyp-top").mouseenter(function() {
//    //Shows positive stance
//    $(this).parents(".hyp-scorecontrol:eq(0)").addClass(".hyp-temppositive");
//  });

//  $(".hyp-scorecontrol> .hyp-top").mouseleave(function() {
//    //Hides positive stance
//    $(this).parents(".hyp-scorecontrol:eq(0)").removeClass(".hyp-temppositive");
//  });

//  $(".hyp-scorecontrol> .hyp-top").click(function() {
//    //Clears other stances
//    $(this).parents(".hyp-scorecontrol:eq(0)").removeClass(".hyp-neutral");
//    $(this).parents(".hyp-scorecontrol:eq(0)").removeClass(".hyp-negative");
//    //Activates positive stance
//    $(this).parents(".hyp-scorecontrol:eq(0)").addClass(".hyp-positive");
//  });


//  $(".hyp-scorecontrol> .hyp-mid").mouseenter(function() {
//    //Shows neutral stance
//    $(this).parents(".hyp-scorecontrol:eq(0)").addClass(".hyp-tempneutral");
//  });

//  $(".hyp-scorecontrol> .hyp-mid").mouseleave(function() {
//    //Hides neutral stance
//    $(this).parents(".hyp-scorecontrol:eq(0)").removeClass(".hyp-tempneutral");
//  });

//  $(".hyp-scorecontrol> .hyp-mid").click(function() {
//    //Clears other stances
//    $(this).parents(".hyp-scorecontrol:eq(0)").removeClass(".hyp-negative");
//    $(this).parents(".hyp-scorecontrol:eq(0)").removeClass(".hyp-positive");
//    //Activates neutral stance
//    $(this).parents(".hyp-scorecontrol:eq(0)").addClass(".hyp-neutral");
//  });


//  $(".hyp-scorecontrol> .hyp-bottom").mouseenter(function() {
//    //Shows negative stance
//    $(this).parents(".hyp-scorecontrol:eq(0)").addClass(".hyp-tempnegative");
//  });

//  $(".hyp-scorecontrol> .hyp-bottom").mouseleave(function() {
//    //Hides negative stance
//    $(this).parents(".hyp-scorecontrol:eq(0)").removeClass(".hyp-tempnegative");
//  });

//  $(".hyp-scorecontrol> .hyp-bottom").click(function() {
//    //Clears other stances
//    $(this).parents(".hyp-scorecontrol:eq(0)").removeClass(".hyp-negative");
//    $(this).parents(".hyp-scorecontrol:eq(0)").removeClass(".hyp-neutral");
//    //Activates negative stance
//    $(this).parents(".hyp-scorecontrol:eq(0)").addClass(".hyp-negative");
//  });


//}); ////END
