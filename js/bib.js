(function() {
  "use strict";
  $( document ).ready(function() {
    // refresh content via ajax
    function refresh(page) {
        $.ajax({
          type: "GET",
          url: "content.php",
          data: "page=" + page,
          success: function(data) {
            $("#content").html(data);
          }
        });
    }
    window.refreshPage = refresh;

    // add to basket function, calls refresh after success to reload the data
    window.addToBasket = function(idx, page) {
      $.ajax({
        type: "GET",
        url: "basket.php",
        data: "add=" + idx,
        success: function(data) {
          refresh(page);
        }
      });
    };

    // delete from basket function, calls refresh after success to reload the data
    window.delFromBasket = function(idx, page) {
      $.ajax({
        type: "GET",
        url: "basket.php",
        data: "del=" + idx,
        success: function(data) {
          refresh(page);
        }
      });
    };

    // shows the bib tex window
    window.showBibTex = function() {
      $.ajax({
        type: "GET",
        url: "bib.php",
        success: function(data) {
          $("#bibtexarea").val(data);
          $("#bibtex").modal({
            "backdrop" : "static",
            "keyboard" : true,
            "show" : true
          });
        }
      });
    }

    // show add dialogs functionality
    $("#add").click(function() {
      $("#form").toggleClass("hidden");
      $("#journaltab").removeClass("hidden");
      $("#booktab").addClass("hidden");
    });

    // add tab switching
    $("#setactivetabjournal").click(function() {
      $("#journaltab").removeClass("hidden");
      $("#booktab").addClass("hidden");
    });
    $("#setactivetabbook").click(function() {
      $("#booktab").removeClass("hidden");
      $("#journaltab").addClass("hidden");
    });

    // submitting journal form
    $("#addjform").submit(function(event) {
      event.preventDefault();
      var form = $(this);
      var url = form.attr("action");
      var postdata = {
        authors: $("#jauthors").val(),
        aname: $("#janame").val(),
        jname: $("#jjname").val(),
        year: $("#jyear").val(),
        volume: $("#jvolume").val(),
        number: $("#jnumber").val(),
        pages: $("#jpages").val(),
        month: $("#jmonth").val(),
        key: $("#jkey").val(),
        note: $("#jnote").val(),
      };
      var posting = $.post(url, postdata);
      posting.done(function(data) {
        $("#jauthors").val("");
        $("#janame").val("");
        $("#jjname").val("");
        $("#jyear").val("");
        $("#jvolume").val("");
        $("#jnumber").val("");
        $("#jpages").val("");
        $("#jmonth").val("");
        $("#jkey").val("");
        $("#jnote").val("");

        $("#addjalert").removeClass("hidden");
        setTimeout(function() {
          $("#addjalert").addClass("hidden");
        }, 1500);

        refresh(0);
      });
    });
    // submitting book form
    $("#addbform").submit(function(event) {
      event.preventDefault();
      var form = $(this);
      var url = form.attr("action");
      var postdata = {
        authors: $("#bauthors").val(),
        title: $("#btitle").val(),
        publisher: $("#bpublisher").val(),
        year: $("#byear").val(),
        volume: $("#bvolume").val(),
        series: $("#bseries").val(),
        edition: $("#bedition").val(),
        month: $("#bmonth").val(),
        key: $("#bkey").val(),
        note: $("#bnote").val(),
      };
      var posting = $.post(url, postdata);
      posting.done(function(data) {
        $("#bauthors").val("");
        $("#btitle").val("");
        $("#bpublisher").val("");
        $("#byear").val("");
        $("#bvolume").val("");
        $("#bseries").val("");
        $("#bedition").val("");
        $("#bmonth").val("");
        $("#bkey").val("");
        $("#bnote").val("");

        $("#addbalert").removeClass("hidden");
        setTimeout(function() {
          $("#addbalert").addClass("hidden");
        }, 1500);

        refresh(0);
      });
    });

    // load page 1
    refresh(0);
  });
}())
