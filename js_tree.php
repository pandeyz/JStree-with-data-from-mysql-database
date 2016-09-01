<head>
    <meta charset="utf-8" />
    <title>JsTree test</title>

    <link rel="stylesheet" href="http://static.jstree.com/latest/assets/dist/themes/default/style.min.css" />
    <script src="http://static.jstree.com/latest/assets/dist/libs/jquery.js"></script>
    <script src="http://static.jstree.com/latest/assets/dist/jstree.min.js"></script>
</head>
<body>
    <div id="container"></div>
    <input type="button" id="btn" value="Submit">
</body>
</html>

<script>
$(document).ready(function(){
    // ajax call to get the data for JS tree
    var ajaxResponse = '';
    $.ajax({
    	url 	: 'response.php',
    	async  : false,
    	success : function(response)
    	{
    		ajaxResponse = response;
    	}
    });

    // render js tree
    var tree = $("#container");
    tree.html(ajaxResponse);
    tree.jstree({
        //plugins: ["checkbox" ], //["wholerow", "checkbox", "json_data", "ui", "themes"]
        plugins: ["wholerow", "checkbox", "json_data", "ui", "themes"],
        'checkbox': {
            three_state: false,
            cascade: 'up'
        }
    });
    tree.jstree(true).open_all();
    $('li[data-checkstate="checked"]').each(function() {
        tree.jstree('check_node', $(this));
    });
    tree.jstree(true).close_all();

    // get all the selected nodes
    $('#btn').click(function(){
        var selectedRole = $('#user_role_id').val();
        var selectedPermissions = [];
        var selectedElms = $('#container').jstree("get_selected", true);
            $.each(selectedElms, function() {
                selectedPermissions.push(this.id);
        });
        
        console.log(selectedPermissions);
    });
});
</script>