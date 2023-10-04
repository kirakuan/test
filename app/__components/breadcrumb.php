
<?php
    // Util::is_true();

    function bread_crumnb (String $_page_path, String $_page_name) {

        if (Util::is_true($_page_path) !== Util::is_true($_page_name)) {
            throw new Exception("引数には、どちらも必要。もしくは、どちらも不要。");            
        }

        global $app;

        $path_list = explode('/', $app->uri);
        $path_list = array_filter($path_list);
        array_unshift($path_list, '/');
    
        $last_index = count($path_list) - 1;
        
        $breadcrumb_str_list = "";
        
        foreach ($path_list as $index => $path) {
     
            foreach ($app->page_info_list as $page_info) {
                $page_name = "";
                
                if ($path === $page_info->path) {
       
                    if ($last_index === $index) {
                        
                        if (Util::is_true($_page_name)) {
                            $page_name = $_page_name;
                        } else {
                            $page_name = $page_info->name;
                        }

                        $breadcrumb_str_list .= "<li class='breadcrumb-item active' aria-current='page'>{$page_name}</li>";

                    } else {
                        // echo "not last";
                        $page_name = $page_info->name;
                        $page_path = $page_info->path;
                        if ($page_path !== "/") {
                            $page_path = "/".$page_path;
                        }
                        $breadcrumb_str_list .= "<li class='breadcrumb-item'><a href='{$page_path}'>{$page_name}</a></li>";
                    }

                } elseif ($_page_path === $path) {
                    if ($last_index === $index) {
                        if (Util::is_true($_page_name)) {
                            $page_name = $_page_name;
                            $breadcrumb_str_list .= "<li class='breadcrumb-item active' aria-current='page'>{$page_name}</li>";
                        }
                        break;
                    }
                }
            }
        }

        return $breadcrumb_str_list;
    }

    $breadcrumb_str_list = bread_crumnb($page_path, $page_name);
?>

<div class="c-breadcrumb container u-ch-mt-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php echo $breadcrumb_str_list; ?>
        </ol>
    </nav>
</div>
