use Intervention\Image\Facades\Image;

//Image Intervension for image resize


<?php 
$imagepath = $request->file('product_thumbnail');
        $imgName = hexdec(uniqid()).'.'.$imagepath->getClientOriginalExtension();

        Image::make($imagepath)->resize(917, 1000)->save('upload/product/thumbnail/'.$imgName);
        $imgUrl = ('upload/product/multiImg/'.$imgName);
 ?>


<!-- update -->
$oldFile = storage_path().$User->profile_photo_path;
            if(File::exists($Old_file_path)) {
                unlink($Old_file_path); //delete from storage
             }


//Multiimage upload
<?php 

$multi_images = $request->file('multi_images');

        foreach($multi_images as $img){
            $singleImg = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();

            Image::make($img)->resize(917, 1000)->save('upload/products/multiImg/'.$singleImg);
            $imageUrl = ('upload/products/multiImg/'.$imgName);

            MultiImage::insert([
                'product_id'=> $productId,
                'image_path'=>$imageUrl,
            ]);

        }
 ?>
