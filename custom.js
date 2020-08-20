
    $('#load_more_prods').on('click', (e) =>{
        // e.preventDefault();
        var currentPage = $('.products-list').data('page');
       // console.log(current_page);
        

        var max_page    = $('.products-list').data('max');

       
        var form = {
            action: 'load_more_products_shop',
            current_page:  currentPage      
        }

        $.post(wp_ajax_obj.ajax_url, form, function(data){

            if(data.success == true){
                // console.log(data); 
                currentPage++;
                $('.products-list').data('page', currentPage);
                if(currentPage == max_page){
                    $('#load_more_prods').hide();
                }
                $('.products-list').append(data.data);                
            }else{
                console.log(data);                
            }
                             
        });
    });

   
