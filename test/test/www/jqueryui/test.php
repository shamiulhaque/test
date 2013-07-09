<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Sortable - Connect lists</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <style>
  #sortable1, #sortable2 { list-style-type: none; margin: 0; padding: 0 0 2.5em; float: left; margin-right: 10px; }
  #sortable1 li, #sortable2 li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; width: 120px; }
  </style>
  <script>
  $(function() {
$("#sort_list").nestedSortable({
  containment: 'parent',                                                                                     
  axis: 'y',
  revert: true,
  opacity: 0.8
});
$(".sub_list").sortable({ 
  containment: 'parent',
  axis: 'y',
  revert: true,
  opacity: 0.8,
});
$("#sort_list").disableSelection();
  });
  </script>
</head>
<body>
 
<ul id="sort_list">
  <li>one</li>
  <li>two
    <ul class="sub_list">
    <li>sub one</li>
    <li>sub two</li>
    </ul>
  </li>
  <li>three</li>
  <li>four</li>
</ul>
 
 
</body>
</html>