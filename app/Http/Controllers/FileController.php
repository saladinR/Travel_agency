<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\avis;
  
class FileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('back-end.index');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
                
                'titre' => 'required',
                'sous_titre' => 'required',
                'desc_1' => 'required',
                'desc_2' => 'required',
                'video' => 'required',
                'prix' => 'required',
                'nbr_perso' => 'required',
                'airport' => 'required',
                'date_depart'=> 'required'

        ]);
        $data= new File();
        // File::create($request->all());
        $t=time();
        
        if ( $request->hasFile( 'filenames1' ) ) {
            
            $file = $request->filenames1;
            $extension1 =date("Y-m-d").'_'.$t.'_'.$file->getClientOriginalName();
           
            $file->move(storage_path('app/public'), $extension1); 
            
            $data->filenames1 = $extension1;
            // die($data['video']); 
            }
         if ( $request->hasFile( 'filenames2' ) ) {
            
            $file = $request->filenames2;
            $extension2 =date("Y-m-d").'_'.$t.'_'.$file->getClientOriginalName();
           
            $file->move(storage_path('app/public'), $extension2); 
            
            $data->filenames2 = $extension2;
            // die($data['video']); 
            }
         if ( $request->hasFile( 'filenames3' ) ) {
            
            $file = $request->filenames3;
            $extension3 =date("Y-m-d").'_'.$t.'_'.$file->getClientOriginalName();
           
            $file->move(storage_path('app/public'), $extension3); 
            
            $data->filenames3 = $extension3;
            // die($data['video']); 
            }
         if ( $request->hasFile( 'filenames4' ) ) {
            
            $file = $request->filenames4;
            $extension4 =date("Y-m-d").'_'.$t.'_'.$file->getClientOriginalName();
           
            $file->move(storage_path('app/public'), $extension4); 
            
            $data->filenames4 = $extension4;
            // die($data['video']); 
            }
         if ( $request->hasFile( 'filenames5' ) ) {
            
            $file = $request->filenames5;
            $extension5 =date("Y-m-d").'_'.$t.'_'.$file->getClientOriginalName();
           
            $file->move(storage_path('app/public'), $extension5); 
            
            $data->filenames5 = $extension5;
            // die($data['video']); 
            }
         if ( $request->hasFile( "filenames6" ) ) {
            
            $file = $request->filenames6;
            $extension6 =date("Y-m-d").'_'.$t.'_'.$file->getClientOriginalName();
           
            $file->move(storage_path('app/public'), $extension6); 
            
            $data->filenames6 = $extension6;
            // die($data['video']); 
            }
     
      //   if ( $request->hasFile( 'video' ) ) {
            
      //       $file = $request->video;
      //       $extension =date("Y-m-d").'_'.$t.'_'.$file->getClientOriginalName();
           
      //       $file->move(public_path('data_app/video'), $extension); 
            
      //       $data->video = $extension;
      //       // die($data['video']); 
      //       }
          
        
         
         $data->titre = $request->titre;
         $data->sous_titre = $request->sous_titre;
         $data->desc_1 = $request->desc_1;
         $data->desc_2 = $request->desc_2;
         $data->prix = $request->prix;
         $data->video = $request->video;
         $data->nbr_perso = $request->nbr_perso;
         $data->airport = $request->airport;
         $data->date_depart = $request->date_depart;
        
        
         
         $data->save();
         //store data in database
        
        
  
        return back()->with('success', 'Les informations sont bien enregistrer');
    }
    public function index() {

        $offre = File::select('filenames1','filenames2','filenames3','filenames4','filenames5','filenames6','titre','sous_titre','desc_1','desc_2','video','prix','nbr_perso','airport','date_depart')->orderBy('created_at', 'desc')->get();
        // var_dump($news);
        $avis = avis::select('id','star','email','message')->get();
       
        return view('front-end.home',compact('offre','avis'));
      }
      public function edit(File $file)
         {
         $file = File::select('id','filenames1','filenames2','filenames3','filenames4','filenames5','filenames6','titre','sous_titre','desc_1','desc_2','video','prix','nbr_perso','airport','date_depart')->orderBy('created_at', 'desc')->get();
         
         return view('back-end.offre.updateoffre',compact('file'));
         }

      public function update(Request $request, $id)
         {
         $request->validate([
            'titre' => 'required',
            'sous_titre' => 'required',
            'desc_1' => 'required',
            'desc_2' => 'required',
            'video' => 'required',
            'prix' => 'required',
            'nbr_perso' => 'required',
            'airport' => 'required',
            'date_depart'=> 'required'
         ]);
         $data = File::find($id);
      
         $data->titre = $request->titre;
         $data->sous_titre = $request->sous_titre;
         $data->desc_1 = $request->desc_1;
         $data->desc_2 = $request->desc_2;
         $data->prix = $request->prix;
         $data->video = $request->video;
         $data->nbr_perso = $request->nbr_perso;
         $data->airport = $request->airport;
         $data->date_depart = $request->date_depart;
         $data->save();

         return back()->with('success', 'Les informations sont bien enregistrer');
         }
      

}