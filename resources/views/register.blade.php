@extends('layouts/master')

@section('contenido')
    <div class="text" style="margin-bottom: 25px;padding: 0px;">
        <h2 style="text-align: center;">Registro profesores</h2>
        <div class="container">
            <div class="row" style="padding-top: 20px;border-radius: 20px;background: rgba(0,163,255,0.18);box-shadow: 2px 2px 10px rgba(0,0,0,0.7);border: 1px solid #5c5c5c ;">
                <div class="col" style="height: 50px;"></div>
                <div class="col-sm-12 col-md-12 col-lg-12 offset-sm-1 offset-md-2 offset-lg-2" style="margin-bottom: 0px;background: rgba(0,0,0,0.69);border-radius: 20px;border-width: 1px;border-style: solid;text-shadow: 1px 1px 2px rgb(0,0,0);box-shadow: 0px 2px 11px 1px rgb(0,0,0);margin-left: 0;padding-top: 0px;padding-bottom: 10px;">
                    <form>
                        <div class="form-group">
                            <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                                Email</h5>
                                <input class="form-control" type="email" name="email"></div>
                        <div class="form-group">
                            <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                                Nombre</h5>
                                <input class="form-control" type="text" name="nombre"></div>
                        <div class="form-group">
                            <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                                Contraseña</h5>
                                <input class="form-control" type="password"  name="contraseña"></div>
                        <div class="form-group">
                            <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                                Institución</h5>
                                <select class="form-control">
                                    {{-- <optgroup label="This is a group"> --}}
                                        <option value="12" selected="">Institución 1</option>
                                        <option value="13">Institución 2</option>
                                        <option value="14">Institución 3</option>
                                    {{-- </optgroup> --}}
                                </select>
                            <small
                                class="form-text text-muted" style="margin-top: 20px;margin-bottom: 10px;font-size: 14px;">¿Su institución no aparece en la lista?</small>
                                <button class="btn btn-primary" type="button" style="margin-top: 0px;background: rgb(0,163,255);border-color: rgb(0,163,255);">Agregar Institución</button>
                            </div>
                    </form>
                </div>
                <div class="col-lg-12" style="padding-bottom: 0px;margin-bottom: 20px;margin-top: 20px;"><button class="btn btn-primary" type="button" style="font-size: 20px;background: rgb(0,163,255);border-color: rgb(0,163,255);">Registrarse</button></div>
            </div>
        </div>
    </div>
@endsection