use Intervention\Image\Facades\Image;

//Image Intervension for image resize
'document_file' => 'required|mimes:pdf,jpeg,png,jpg|max:4048|min:111',
if ($request->hasFile('document_file')) {
            $file = $request->file('document_file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $destinationPath = public_path('/backend/document/employee');
            $file->move($destinationPath, $filename);
            $fileurl = '/backend/document/employee/' . $filename;
            $EmpDocument->document_file = $fileurl;
        }


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

   if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarName = str_replace(' ', '_', $avatarName);
            $avatarPath = public_path('/images/');
            if ($avatar->move($avatarPath, $avatarName)) {
                if ($user->avatar) {
                    $oldFile = public_path($user->avatar);
                    if (file_exists($oldFile) && !unlink($oldFile)) {
                        $user->avatar = '/images/' . $avatarName;
                        $user->save();
                        $notification = array(
                            'message' => 'User Profile Updated Successfully, But Old Avatar Not Deleted',
                            'alert-type' => 'warning',
                        );
                        return redirect()->route('userProfile')->with($notification);
                    }
                }               
                $user->avatar = '/images/' . $avatarName;
            }
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

//Update Image

  if(isset($input['somity_logo'])){
            $oldFile = $somity->somity_logo;
            if($oldFile){
                \Storage::delete($oldFile);
            }
            $image = $request->file('somity_logo');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images/somity_logo'), $imageName);
            $path = 'images/somity_logo/'.$imageName;
            $somity->somity_logo = $path;
        } else {
            $image = $request->file('somity_logo');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images/somity_logo'), $imageName);
            $path = 'images/somity_logo/'.$imageName;
            $somity->somity_logo = $path;
        }



 ?>
