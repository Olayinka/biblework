<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>Bible Search</h1>

<h2>By Keyword</h2>
<form method="POST" action="{{ route('search') }}">
  @csrf
  
      <label for="term">Text:</label>
      <input type="text" id="term" name="term">
  
  
      <label for="version">Version:</label>
      <select name="version" id="version">
          <option value="kjv">King James (KJV)</option>
          <option value="web">World English Bible (WEB)</option>
          <option value="ylt">Young's Literal Translation (YLT)</option>
          <option value="asv">American Standard Version (ASV)</option>
          <option value="bbe">Bible in Basic English(BBE)</option>
      </select>
  
  <input onclick="searchFn()" type="submit" value="Search">
</form> 


<h2>By Chapter</h2>
<form method="post" action="chapter.php">
     Text: <input type="text" id="book" name="book" />  
     Chapter: <input type="text" id="chapter" name="chapter" />  
     <!-- Verse: <input type="text" id="verse" name="verse" />  -->       
     Version: <select name="version" id="version">
       <option value="kjv">King James (KJV)</option>
       <option value="web">World English Bible (WEB)</option>
       <option value="ylt">Young's Literal Translation (YLT)</option>
       <option value="asv">American Standard Version (ASV)</option>
       <option value="bbe">Bible in Basic English(BBE)</option>
      </select>

     <input onclick="searchFn()" type="submit" value="Open Chapter">
</form> 


<h2>By Verse</h2>
<form method="post" action="verse.php">
     Text: <input type="text" id="book" name="book" />  
     Chapter: <input type="text" id="chapter" name="chapter" />  
     Verse: <input type="text" id="verse" name="verse" />        
     Version: <select name="version" id="version">
       <option value="kjv">King James (KJV)</option>
       <option value="web">World English Bible (WEB)</option>
       <option value="ylt">Young's Literal Translation (YLT)</option>
       <option value="asv">American Standard Version (ASV)</option>
       <option value="bbe">Bible in Basic English(BBE)</option>
      </select>

     <input onclick="searchFn()" type="submit" value="Open Verse">
</form> 

<h2>Compare Versions Verse</h2>
<form method="post" action="compareVersion.php">
     Text: <input type="text" id="book" name="book" />  
     Chapter: <input type="text" id="chapter" name="chapter" />  
     Verse: <input type="text" id="verse" name="verse" />        
     Version1: <select name="version1" id="version1">
       <option value="kjv">King James (KJV)</option>
       <option value="web">World English Bible (WEB)</option>
       <option value="ylt">Young's Literal Translation (YLT)</option>
       <option value="asv">American Standard Version (ASV)</option>
       <option value="bbe">Bible in Basic English(BBE)</option>
      </select>
         Version2: <select name="version2" id="version3">
       <option value="kjv">King James (KJV)</option>
       <option value="web">World English Bible (WEB)</option>
       <option value="ylt">Young's Literal Translation (YLT)</option>
       <option value="asv">American Standard Version (ASV)</option>
       <option value="bbe">Bible in Basic English(BBE)</option>
      </select>

     <input onclick="searchFn()" type="submit" value="Open Verse">
</form> 

<h2>By Voice Control</h2>
<form method="post" action="voice.php">
     Word heard: <input type="text" id="words" name="words" />        
     Version: <select name="version" id="version">
       <option value="kjv">King James (KJV)</option>
       <option value="web">World English Bible (WEB)</option>
       <option value="ylt">Young's Literal Translation (YLT)</option>
       <option value="asv">American Standard Version (ASV)</option>
       <option value="bbe">Bible in Basic English(BBE)</option>
      </select>

     <input onclick="searchFn()" type="submit" value="Search ">
</form> 

<p id="display"></p>

<script src="{{ asset('js/search.js') }}"></script>
<script>
    // Assuming data is a JSON object
    var result = getNames(data, "name");
   document.write("result: " + result.join(", "));
</script>
<script>
 var search = document.getElementById("term").value;
//console.log(data);

function searchFn() {
  alert(search);
  document.getElementById("display").innerHTML = search;
  return true;
}

var result = [];
getNames(data, "name");
# document.write("result: " + result.join(", "));

function getNames(obj, name) {
    for (var key in obj) {
        if (obj.hasOwnProperty(key)) {
            if ("object" == typeof(obj[key])) {
                getNames(obj[key], name);
            } else if (key == name) {
                result.push(obj[key]);
            }
        }
    }
}
</script>
<script type="module" src= "{{ asset('js/kjv.js') }}"></script>
</body>
</html>