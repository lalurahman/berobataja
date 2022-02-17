@foreach ($mou as $item)
<div class="accordion" id="accordionExample{{$item->id}}">
      
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{$item->id}}" aria-expanded="true" aria-controls="collapseOne{{$item->id}}">
          {{$item->topic}}
        </button>
      </h2>
    </div>
    
    <div id="collapseOne{{$item->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample{{$item->id}}">
      <div class="card-body">
        {{$item->desc}}
      </div>
    </div>
  </div>
</div>

@endforeach


<form action=""></form>
<a href="/admin/profil/is_mou_mitra" class="btn btn-primary"><i class="fa fa-check"></i> Setuju dan Lanjutkan</a>