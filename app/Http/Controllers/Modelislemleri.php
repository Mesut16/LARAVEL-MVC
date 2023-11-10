<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\Models\Randevu;
use App\Models\Yorum;
use App\Models\Randevudetay;
use Carbon\Carbon;

class Modelislemleri extends Controller
{
    

    public function ekle(Request $request)
    {

        $gun=Carbon::parse($request->tarih)->dayOfWeek;
        //return $gun;
        
        $request->validate([
            'ad'=>'required',
            'soyad'=>'required',
            'mail'=>'required|email:rfc,dns'
        ]);
        $randevukontrol = Randevu::where("tarih","=",$request->tarih)->where("saat","=",$request->saat) ->first();
        $current = Carbon::now();
        if ($current>$request->tarih){
            return redirect()->route('frontend.randevu')->with('hata','Seçtiğiniz tarih ileri bir tarih olmalıdır...');
        } 
        elseif($gun == 6 || $gun == 0){
            return redirect()->route('frontend.randevu')->with('hata','Seçtiğiniz tarih hafta sonuna denk gelmektedir...');
        }
        elseif($randevukontrol!= null){
            return redirect()->route('frontend.randevu')->with('hata','Seçtiğiniz tarih ve saate başka bir randevu bulunmaktadır...');
        }
        else {       
            Randevu::create([
            "ad"=>$request->ad,
            "soyad"=>$request->soyad,
            "telefon"=>$request->telefon,
            "mail"=>$request->mail,
            "saat"=>$request->saat,
            "tarih"=>$request->tarih,
            
        ]);
        return redirect()->route('frontend.randevu')->with('success','Randevunuz Başarıyla Eklendi');
        }
        

    }

   // RANDEVU LİSTELEME İŞLEMİ

    public function randevuliste()
    {
        $randevular = Randevu::all();
        return view("admin.randevuliste",compact('randevular'));
    }

    // RANDEVU DÜZENLEME VE SİLME İŞLEMLERİ


    public function randevuduzenle($id)
    {
        $randevuBilgisi = Randevu::whereId($id)->first();
        if($randevuBilgisi)
        {
           return view("admin.randevuduzenle",compact('randevuBilgisi')); 
        }
        else{
            return redirect()->route("randevuliste");
        }
        
    }

    public function randevuduzenlepost(Request $request,$id)
    {
        $gun=Carbon::parse($request->tarih)->dayOfWeek;
        $randevukontrol = Randevu::where("tarih","=",$request->tarih)->where("saat","=",$request->saat) ->first();
        $current = Carbon::now();
        if ($current>$request->tarih){
            return redirect()->route('randevu-duzenle',$id)->with('hata','Seçtiğiniz tarih ileri bir tarih olmalıdır...');
        } 
        elseif($gun == 6 || $gun == 0){
            return redirect()->route('randevu-duzenle',$id)->with('hata','Seçtiğiniz tarih hafta sonuna denk gelmektedir...');
        }
        elseif($randevukontrol!= null){
            return redirect()->route('randevu-duzenle',$id)->with('hata','Seçtiğiniz tarih ve saate başka bir randevu bulunmaktadır...');
        }
        else {       
            Randevu::whereId($id)->update([
                "ad"=>$request->ad,
                "soyad"=>$request->soyad,
                "telefon"=>$request->telefon,
                "mail"=>$request->mail,
                "saat"=>$request->saat,
                "tarih"=>$request->tarih,
            
        ]);
        return redirect()->route('randevu-duzenle',$id)->with('success','Randevu Başarıyla Güncellendi');
        }   
    }


    // public function randevuduzenlepost(Request $request,$id)
    // {
    //     Randevu::whereId($id)->update([
    //         "ad"=>$request->ad,
    //         "soyad"=>$request->soyad,
    //         "telefon"=>$request->telefon,
    //         "mail"=>$request->mail,
    //         "saat"=>$request->saat,
    //         "tarih"=>$request->tarih,
            
    //     ]);
    //     return redirect()->route('randevu-duzenle',$id)->with('success','Randevu Başarıyla Güncellendi');
    // }

    public function randevusil($id)
    {
        $randevuBilgisi = Randevu::whereId($id)->first();
        if($randevuBilgisi)
        {
            Randevu::whereId($id)->delete();
        }

        return redirect()->route('randevuliste')->with('success','Randevu Başarıyla Silindi...');
        

    }

    // YORUM EKLEME İŞLEMİ

    public function yorumekle(Request $request)
    {
        Yorum::create([
            "ad_soyad"=>$request->ad_soyad,
            "mail"=>$request->mail,
            "konu"=>$request->konu,
            "yazi"=>$request->yazi,
        ]);
        return redirect()->route('iletisim')->with('success','Değerli görüşünüz için teşekkür ederiz!!!');
    }

    // YORUM LİSTELEME İŞLEMİ

    public function yorumliste()
    {
        $yorumlar = Yorum::all();
        return view("admin.yorumlar",compact('yorumlar'));
    }


    public function yorumgoster()
    {
        $yorum = Yorum::where('aktif','=',1)->get();
        return view("frontend.yorumsayfasi",compact('yorum'));
    }


    // YORUM DÜZENLEME VE SİLME İŞLEMLERİ

    public function yorumduzenle($id)
    {
        $yorumBilgisi = Yorum::whereId($id)->first();
        if($yorumBilgisi)
        {
           return view("admin.yorumduzenle",compact('yorumBilgisi')); 
        }
        else{
            return redirect()->route("yorumliste");
        }
        
    }

    public function yorumduzenlepost(Request $request,$id)
    {
        Yorum::whereId($id)->update([
            "ad_soyad"=>$request->ad_soyad,
            "mail"=>$request->mail,
            "konu"=>$request->konu,
            "yazi"=>$request->yazi,
            "aktif"=>$request->aktif,
            
        ]);
        return redirect()->route('yorumduzenle',$id)->with('success','Yorum Başarıyla Güncellendi');
    }

    public function yorumsil($id)
    {
        $yorumBilgisi = Yorum::whereId($id)->first();
        if($yorumBilgisi)
        {
            Yorum::whereId($id)->delete();
        }

        return redirect()->route('yorumliste')->with('success','Yorum Başarıyla Silindi...');
        

    }


    public function randevu_detay($id)
    {
        $detayListe = Randevu::join('randevu_detay','randevu.id','=','randevu_detay.id')->where('randevu.id',$id)
                        ->get(['randevu.ad','randevu.soyad','randevu_detay.randevu_tarih','randevu_detay.tedavi']);
    
       
        if ($detayListe) {
            return view('admin.randevu_detay',compact('detayListe'));
        } else {
            return redirect()->route("detay");
        }
        
    }



    // TEDAVİ EKLE
    public function tedaviekle($id)
    {
        $tedavi = Randevu::whereId($id)->first();
        if($tedavi)
        {
           return view("admin.tedaviekle",compact('tedavi')); 
        }
        else{
            return redirect()->route("detay");
        }
        
    }

    public function tedavieklepost(Request $request)
    {
        Randevudetay::create([
            "randevu_tarih"=>$request->randevu_tarih,
            "tedavi"=>$request->tedavi,
            "id"=>$request->id,
        ]);
        return redirect()->route('detay',$request->id)->with('success','Tedavi başarıyla eklendi!!!');
    }
   
}
