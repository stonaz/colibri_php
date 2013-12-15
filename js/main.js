function postBook() {
/*
 * post a book
 */
	var title=$("#title").val();
        var author=$("#author").val();
        //var author="tonaz";
        var where_is=$("#where_is").val();
        
        console.log('where_is '+where_is)
        var ok=confirm("Add book ?");
	if (ok==true)
	{
	$.ajax({
		type: "POST",
		url: 'php/insert_book.php',
		data: { "title": title,"author": author,"where_is": where_is},
		dataType: 'json',
		success: function(response){	
			//reloadNodeDiv(nodeSlug)
			alert("Your book has been added!");
			}
        
		});
	  }
}

function getBooks()
{
      var url="php/view_books.php";
      var args = {};
      $("#Intestazione").html('');
      $("#Books").html('');
      //cleanScreen();
      //$("#Loading").show();
      args.title=$("#titleSearch").val();
      args.author=$("#authorSearch").val();
      $.ajax({
        async: true, 
        url: url,
        dataType: 'json',
        data:args,
        success: function(response){
         //printVolumi(response,0,args);
         console.log(response);
       printBooks(response)
      
          }
        
    });
}

function printBooks(data)
{

var count;

(data.length === undefined) ? count=0 : count =data.length;
var tmplMarkup = $('#templateBooksCounter').html();
var compiledTmpl = _.template(tmplMarkup, {count : count, item : "Libri trovati: " });
$("#Intestazione").append(compiledTmpl);


   
  // $("#RisultatiCollegati").show();
   var tmplMarkup = $('#templateBook').html();   
   _.each(data, function(b,i){
      
    //  buttonID="Vol-"+v.volume+"-"+i
      var output = _.template(tmplMarkup, { book : b } );
      $("#Books").append(output);
      //var button=i


   })
   


//$("#Loading").hide()
}