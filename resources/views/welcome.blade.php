
@extends('layout.v_template')

@section('content')
    <div id="landing" class="w-100 m-0" style="height:800px">
        <div>
            <div >
            <img src="{{URL::asset('land_img.jpg')}}" alt="img_landign" style="width:100%; height:auto"/>
            </div>
        <div style="position:relative; top:-470px; left:1000px; width:300px; text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
            <p style="color:black; font-size:32px">Medika Clinic</p>
            <p style="color:black; font-size:28px">Providing the best specialist</p>
            <a style="background-color:red; font-weight:bold" href="/q1/service" class=btn>Get Started</a>

            </div>
        </div>
    </div>
    <div id="specialist">
        <div style="text-align:center">
                <p style="font-size:40px">Specialist</p>
        </div>
    </div>

    <div style="width:80%; margin:auto; display:flex; justify-content:space-between">
        <div class="border border-2 border-danger card" style="width:300px; height:500px; background-color:white; ">
            <div style="">
                <img src="{{URL::asset('onko.jpg')}}" style="width:100%; height:250px; border-radius:10px 10px 0 0"/>
            </div>
            <div style="padding:10px">
                <p style="font-weight:bold">Oncologist</p>
                <p>Oncology is the study of cancer. An oncologist is a cancer specialist</p>
            </div>
        </div>
    
        <div class="border border-2 border-danger card" style="width:300px; height:500px; background-color:white">
            <img src="{{URL::asset('orto.jpg')}}" style="width:100%; height:250px;border-radius:10px 10px 0 0"/>
            <div style="padding:10px">
                <p style="font-weight:bold">Orthopaedic</p>
                <p>Specialist in injuries and diseases of muculoskeletal system, or muscle and skeleton system</p>
            </div>
        </div>
    <div class="border border-2 border-danger card" style="width:300px; height:500px; background-color:white">
            <img src="{{URL::asset('tht.jpg')}}" style="width:100%; height:250px;border-radius:10px 10px 0 0"/>
            <div style="padding:10px">
                <p style="font-weight:bold">ENT</p>
                <p>ENT doctors specialize on ear, nose, and throat problems</p>
            </div>
        </div>
        <div class="border border-2 border-danger card" style="width:300px; height:500px; background-color:white">
            <img src="{{URL::asset('poli.jpg')}}" style="width:100%; height:250px;border-radius:10px 10px 0 0"/>
            <div style="padding:10px">
                <p style="font-weight:bold">Policlinic</p>
                <p>Doing check-up on general diseases or problems</p>
            </div>
        </div>
    </div>

    <div style="display:flex;justify-content:space-between ;width:80%; margin:auto; margin-top:120px">
        <div style="width:50%">
            <img src="{{URL::asset('contact.jpg')}}" style="width:100%; height:430px"/>
        </div>
        <div style="width:45%">
            <form style="width=100%">
                <input class="input_box" type="text" placeholder="Name"/>
                <input class="input_box"  type="email" placeholder="Email"/>
                <input class="input_box" type="text" placeholder="Subject" />
                <textarea class="comment_box" placeholder="Message" name="message"/></textarea>
                <input type="submit" value="Send" />
            </form>
        </div>
    </div>
@endsection

