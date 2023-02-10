@extends('layouts.app')
@section('title', 'DASHBOARD')
@section('content')
    <div class="col-12 col-12">
        <h3 class="text-dark pb-3">Carpetas</h3>
    </div>
    @foreach($folders as $folder)
            <div class="col-md-2 col-6 ">
                <a href="dashboard?folder={{$folder->id}}">
                    <img  src="{{url('app/img/Folder.png')}}" class="img-responsive" alt="" title="{{$folder->name}}">

                </a>
                <div>
                    <p class="text-center" style="font-size: 14px;" title="{{$folder->name}}">
                        {{substr($folder->name,0,12)}}.. <i class="fa fa-ellipsis-v " style="margin-left: 18px; cursor: pointer;font-size: 17px; padding-bottom: 10px" data-toggle="modal" data-target="#add-edit-folder" ></i>
                    </p>
                </div>

            </div>
            <div id="add-edit-folder" class="modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 class="text-dark a">Configuraciones de Carpetas </h3>
                            <form action="" >


                                <div class="form-group">
                                    <fieldset disabled>
                                        <label class="pt-3">Nombre Actual de su Carpeta</label>
                                        <input  type="text" class="form-control " id="disabledTextInput"  placeholder="{{$folder->name}}">
                                    </fieldset>
                                    <label class="pt-3">Nuevo Nombre de su Carpeta</label>
                                    <input required type="text" class="form-control" name="name" id="name" placeholder="Escriba el Nombre de su Carpeta">
                                </div>



                                        <button class="btn btn-models-edit float-right " type="submit" style="font-size: 14px">Editar Nombre</button>
                                        <button class="btn btn-models-delete float-left" type="submit">Eliminar</button>





                            </form>
                        </div>
                    </div>
                </div>
            </div>

    @endforeach

    <div class="col-12 col-12">
        <h3 class="text-dark pt-3 pb-5">Archivos</h3>
    </div>
    @foreach($files as $file)
            <div class="col-md-2 col-6">
                <img src="{{url('app/img/File.png')}}" class="img-responsive" alt="" title="{{$file->name}}">
                <p class="text-center pt-3" style="font-size: 14px;" title="{{$file->name}}">{{substr($file->name,0,12)}}.. <i class="fa fa-ellipsis-v " style="margin-left: 15px; cursor: pointer;font-size: 17px;" data-toggle="modal" data-target="#add-config-file" ></i>
                </p>

            </div>

            <div id="add-config-file" class="modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="d-flex justify-content-center align-items-center">
                                <img width="120px" src="{{url('app/img/File.png')}}" class="img-responsive pt-5 pb-5" style="border-radius: 50%;" alt="" title="{{$file->name}}">
                            </div>

                            <h3 class="text-dark">Configuraciones de Archivo</h3>
                            <form action="" >
                                <fieldset disabled>
                                    <label class="pt-3">Nombre Actual de su Archivo</label>
                                    <input  type="text" class="form-control " id="disabledTextInput"  placeholder="{{$file->name}}">
                                </fieldset>
                                <div class="form-group">
                                    <label class="pt-3">Nuevo Nombre de su Archivo</label>
                                    <input  type="text" class="form-control" name="name" id="name" placeholder="Escriba el Nombre de su Archivo">
                                </div>
                                <div style="margin-left: 3%">
                                    <button class="btn btn-models-delete" type="submit">Elimanar </button>
                                    <button class="btn btn-models-share" type="submit">Compartir</button>
                                    <button class="btn btn-models-dowload" type="submit">Descargar </button>
                                    <button class="btn btn-models-edit" type="submit">Editar</button>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach





@endsection
