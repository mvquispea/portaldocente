@extends('layouts.app')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Registro de Perfil </h1>
                    <!--end::Title-->

                </div>
                <!--end::Page title-->

            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Tables widget 8-->
                        <div class="card h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header position-relative py-0 border-bottom-2">
                                <!--begin::Nav-->
                                <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3">
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 me-8">
                                        <!--begin::Nav link-->
                                        <a class="nav-link btn btn-color-muted px-0 show active" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_1">
                                            <!--begin::Title-->
                                            <span class="nav-text fw-semibold fs-4 mb-3">Información General</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Nav link-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 me-8">
                                        <!--begin::Nav link-->
                                        <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_2">
                                            <!--begin::Title-->
                                            <span class="nav-text fw-semibold fs-4 mb-3">Información Estudios</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Nav link-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 me-8">
                                        <!--begin::Nav link-->
                                        <a class="nav-link btn btn-color-muted px-0 " data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_3">
                                            <!--begin::Title-->
                                            <span class="nav-text fw-semibold fs-4 mb-3">Capacitación</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Nav link-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 me-8">
                                        <!--begin::Nav link-->
                                        <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_4">
                                            <!--begin::Title-->
                                            <span class="nav-text fw-semibold fs-4 mb-3">Experiencia Docente</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Nav link-->
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 me-8">
                                        <!--begin::Nav link-->
                                        <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_5">
                                            <!--begin::Title-->
                                            <span class="nav-text fw-semibold fs-4 mb-3">Experiencia profesional</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Nav link-->
                                    </li>
                                    <!--end::Nav item-->

                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 me-8">
                                        <!--begin::Nav link-->
                                        <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_6">
                                            <!--begin::Title-->
                                            <span class="nav-text fw-semibold fs-4 mb-3">Reconocimiento</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Nav link-->
                                    </li>
                                    <!--end::Nav item-->


                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0 me-8">
                                        <!--begin::Nav link-->
                                        <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" href="#kt_table_widget_7_tab_content_7">
                                            <!--begin::Title-->
                                            <span class="nav-text fw-semibold fs-4 mb-3">Producción y Tecnológia</span>
                                            <!--end::Title-->
                                            <!--begin::Bullet-->
                                            <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Nav link-->
                                    </li>
                                    <!--end::Nav item-->




                                </ul>
                                <!--end::Nav-->

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Tab Content (ishlamayabdi)-->
                                <div class="tab-content mb-2">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_table_widget_7_tab_content_1">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                    
                                            <div class="card mb-5 mb-xl-10">
                                                <!--begin::Card header-->
                                                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                                    <!--begin::Card title-->
                                                    <div class="card-title m-0">
                                                        <h3 class="fw-bold m-0">INFORMACIÓN GENERAL</h3>
                                                    </div>
                                                    <!--end::Card title-->
                                                </div>
                                                <!--begin::Card header-->
                                                <!--begin::Content-->
                                                <div>
                            

                                                    <!--begin::Form-->

                                                    <form id="kt_account_profile_details_form" class="form" method="POST" action="{{ route('add') }}" enctype="multipart/form-data">
                                                    
                                                        @csrf
                                       
                                                       
                                                        <!--begin::Card body-->
                                                        <div class="card-body border-top p-9">
                                                            <!--begin::Input group-->
                                                            <div class="row mb-6">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <!--begin::Image input-->
                                                                   
                                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset($docente->foto ?? 'assets/media/avatars/blank.png') }}')" id="foto-preview">
                                                                    
                                                                        <!--begin::Preview existing avatar-->
                                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ asset($docente->foto ?? 'assets/media/avatars/blank.png') }}')"></div>

                                                                        <!--end::Preview existing avatar-->
                                                                        <!--begin::Label-->
                                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                                            <!--begin::Inputs-->
                                                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" id="foto-input" />
                                                                            <input type="hidden" name="avatar_remove" />
                                                                            
                                                                            <!--end::Inputs-->
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Cancel-->
                                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                                            <i class="bi bi-x fs-2"></i>
                                                                        </span>
                                                                        <!--end::Cancel-->
                                                                        <!--begin::Remove-->
                                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                                            <i class="bi bi-x fs-2"></i>
                                                                        </span>
                                                                        <!--end::Remove-->
                                                                    </div>
                                                                    
                                                                    
                                                                    <!--end::Image input-->
                                                                    <!--begin::Hint-->
                                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                                    <!--end::Hint-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->


                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nombre completo</label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8">
                                                                <!--begin::Row-->
                                                                <div class="row">
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-6 fv-row">
                                                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Nombre"  />
                                                                    </div>
                                                                    <!--end::Col-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-6 fv-row">
                                                                        <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Apellidos"  />
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Row-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Teléfonos</label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8">
                                                                <!--begin::Row-->
                                                                <div class="row">
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-6 fv-row">
                                                                        <input type="text" name="numero1" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Celular"  />
                                                                    </div>
                                                                    <!--end::Col-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-6 fv-row">
                                                                        <input type="text" name="numero2" class="form-control form-control-lg form-control-solid" placeholder="Fijo"  />
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Row-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Correos</label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-6 fv-row">
                                                                <input type="text" name="correop" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Personal"  />
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-6 fv-row">
                                                                    <input type="text" name="correoi" class="form-control form-control-lg form-control-solid" placeholder="Institucional"  />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Direccion</label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8 fv-row">
                                                                <input type="text" name="direccion" class="form-control form-control-lg form-control-solid" placeholder="Dirección" />
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                                <span class="required">Estado civil</span>
                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Categoria"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="estadocivil" aria-label="Select a Estado civil" data-control="select2" data-placeholder="Select a estado civil..." class="form-select form-select-solid form-select-lg fw-semibold">
                                                                    <option value="">Select a estado civil...</option>
                                                                    <option data-kt-flag="flags/afghanistan.svg" value="M">Casado</option>
                                                                    <option data-kt-flag="flags/afghanistan.svg" value="F">Soltero</option>
                                                    
                                                                </select>
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->


                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                                <span class="required">Genero</span>
                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Genero"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="genero" aria-label="Select a category" data-control="select2" data-placeholder="Select a genero..." class="form-select form-select-solid form-select-lg fw-semibold">
                                                                    <option value="">Select a genero...</option>
                                                                    <option data-kt-flag="flags/afghanistan.svg" value="M">Masculino</option>
                                                                    <option data-kt-flag="flags/afghanistan.svg" value="F">Femenino</option>
                                                    
                                                                </select>
                                                            </div>
                                                        <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Fecha nacimiento</label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8 fv-row">
                                                                <!--begin::Input-->
                                                                <input type="date" name="fechanacimiento" class="form-control form-control-lg form-control-solid" placeholder="Fecha de nacimiento" />

																<!--end::Input-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Lugar de nacimiento (Departamento, País)</label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8 fv-row">
                                                                <input type="text" name="nacimiento" class="form-control form-control-lg form-control-solid" placeholder="Lugar de nacimiento" />
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Nacionalidad</label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8 fv-row">
                                                                <input type="text" name="nacionalidad" class="form-control form-control-lg form-control-solid" placeholder="Nacionalidad" />
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                        
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                                <span class="required">Condición</span>
                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Condición"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            

                                                            <!--begin::Col-->
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="condicion" aria-label="Select a Condición" data-control="select2" data-placeholder="Select a condición..." class="form-select form-select-solid form-select-lg fw-semibold">
                                                                    <option value="">Select a Condición...</option>
                                                                    <option data-kt-flag="flags/afghanistan.svg" value="Contratado">Contratado</option>
                                                                    <option data-kt-flag="flags/aland-islands.svg" value="Ordinario">Ordinario</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Col-->

                                                        </div>
                                                        <!--end::Input group-->

                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Año</label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8 fv-row">
                                                                <input type="text" name="ano" class="form-control form-control-lg form-control-solid" placeholder="Ingrese año" />
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->


                                                        <!--begin::Input group-->
                                                        <div class="row mb-6">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                                <span class="required">Categoria</span>
                                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Categoria"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="category" aria-label="Select a category" data-control="select2" data-placeholder="Select a category..." class="form-select form-select-solid form-select-lg fw-semibold">
                                                                    <option value="">Select a category...</option>
                                                                    <option data-kt-flag="flags/afghanistan.svg" value="Auxiliar">Auxiliar</option>
                                                                    <option data-kt-flag="flags/aland-islands.svg" value="AX">Asociado</option>
                                                                    <option data-kt-flag="flags/albania.svg" value="Asociado">Principal</option>
                                                                    <option data-kt-flag="flags/albania.svg" value="JP">JP</option>
                                                                    <option data-kt-flag="flags/albania.svg" value="Docente">Docente</option>
                                                    
                                                                </select>
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        </div>
                                                        <!--end::Card body-->
                                                        <!--begin::Actions-->
                                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                           
                                                            <button type="submit" class="btn btn-primary me-2">Guardar</button>
                                                           
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Basic info-->
                                      
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_table_widget_7_tab_content_2">
                                        
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->

                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="card card-custom">
                                                        <div class="card-body">
                                                            <h1 class="card-title">Estudios Realizados</h1>
                                              
                                                                <div id="estudios-container">
                                                                    <form id="kt_account_profile_details_form2" class="form" method="POST" action="{{ route('add_study') }} ">
                                                                        @csrf
                                                               
                                                                       
                                                                        <div class="form-group row">
                                                                    
                                                                            <div class="col-lg-2">
                                                                                <label for="grado" class="col-form-label">Grados:</label>
                                                                                <select required id="grado" name="grado" class="form-control">
                                                                                    <option value="">Seleccione grado</option>
                                                                                    <option value="1">BACHILLER</option>
                                                                                    <option value="2">INGENIERO</option>
                                                                                    <option value="3">MAESTRO</option>
                                                                                </select>
                                                                            </div>
                                                                    
                                                                            <div class="col-lg-2">
                                                                                <label for="institucion" class="col-form-label">Institución:</label>
                                                                                <input type="text" id="institucion" name="institucion" class="form-control" required>
                                                                            </div>
                                                                    
                                                                            <div class="col-lg-2">
                                                                                <label for="grado_obtenido" class="col-form-label">Grado Obtenido:</label>
                                                                                <input type="text" id="grado_obtenido" name="grado_obtenido" class="form-control" required>
                                                                            </div>
                                                                    
                                                                            <div class="col-lg-2">
                                                                                <label for="concluidos" class="col-form-label">Concluidos:</label>
                                                                                <select id="concluidos" name="concluidos" class="form-control" required>
                                                                                    <option value="1">Sí</option>
                                                                                    <option value="0">No</option>
                                                                                </select>
                                                                            </div>
                                                                    
                                                                            <div class="col-lg-2">
                                                                                <label for="anio" class="col-form-label">Año:</label>
                                                                                <input type="number" id="anio" name="anio" class="form-control" required>
                                                                            </div>
                                                                    
                                                                            <div class="col-lg-1">
                                                                                <button type="button" class="btn btn-danger" onclick="eliminarEstudio()">Eliminar</button>
                                                                            </div>
                                                                            <input type="hidden" name="id" class="form-control" required>
                                                                    
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <button type="button" class="btn btn-primary" onclick="agregarEstudio()">Agregar Estudio</button>
                                                               
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->

                                        <!--begin::Actions-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                         
                                            <button type="submit" form="kt_account_profile_details_form2" class="btn btn-primary me-2">Guardar</button>
                                         
                                            
                                        </div>
                                        <!--end::Actions-->
                                
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_table_widget_7_tab_content_3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->

                                            <form id="kt_account_profile_details_form3" class="form" method="POST" action="{{ route('update_training') }}">
                                                @csrf
                                                @method('PUT')
                                            
                                                <div id="capas-container">
                                                
                                                        {{-- 
                                                        @foreach($capa as $key2 => $capas)
                                                            <div id="capa-{{ $capas->id }}" class="form-group row">
                                                            
                                                                <div class="col-lg-2">
                                                                    <label for="curso-{{ $capas->id }}" class="col-form-label">Curso:</label>
                                                                    <input type="text" id="curso-{{ $capas->id }}" name="capas[{{$key2}}][curso]"  class="form-control" required value="{{ $capas->curso }}">
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label for="capainstitucion-{{ $capas->id }}" class="col-form-label">Institucion:</label>
                                                                    <input type="text" id="capainstitucion-{{ $capas->id }}" name="capas[{{$key2}}][capainstitucion]"  class="form-control" required value="{{ $capas->capainstitucion }}">
                                                                </div>

                                                                <div class="col-lg-2">
                                                                    <label for="horas-{{ $capas->id }}" class="col-form-label">Horas:</label>
                                                                    <input type="number" id="horas-{{ $capas->id }}" name="capas[{{$key2}}][horas]" class="form-control" required value="{{ $capas->horas }}">
                                                                </div>


                                                                <div class="col-lg-2">
                                                                    <label for="anio-{{ $capas->id }}" class="col-form-label">Año de graduación:</label>
                                                                    <input type="number" id="anio-{{ $capas->id }}" name="capas[{{$key2}}][anio]" class="form-control" required value="{{ $capas->anio }}">
                                                                </div>


                                                                <div class="col-lg-1">
                                                                    <button type="button" class="btn btn-danger" onclick="eliminarEstudio({{ $capas->id }})">
                                                                        Eliminar
                                                                    </button>

                                                                </div>
                                                            
                                                                
                                                            </div>
                                                            
                                                        
                                                        @endforeach --}}
                                                    
                                                </div>
                                                <button type="button" class="btn btn-primary" onclick="agregarEstudio()">Agregar Estudio</button>
                                       
                                            </form>

                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_table_widget_7_tab_content_4">
                                                                   <!--begin::Table container-->
                                                                   <div class="table-responsive">
                                                                    <!--begin::Table-->
                        
                                                                    <form id="kt_account_profile_details_form3" class="form" method="POST" action="{{ route('update_profeexperience') }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                    aaaaa
                                                                        <div id="profeexperience-container">
                                                                             {{-- @if ($profeexperience) --}}
                        
                                                                                {{-- @foreach($profeexperience as $key2 => $profeexperiences)
                                                                                    <div id="capa-{{ $profeexperiences->id }}" class="form-group row">
                                                                                    
                                                                                        <div class="col-lg-2">
                                                                                            <label for="curso-{{ $profeexperiences->id }}" class="col-form-label">Curso:</label>
                                                                                            <input type="text" id="curso-{{ $profeexperiences->id }}" name="profeexperiences[{{$key2}}][curso]"  class="form-control" required value="{{ $profeexperiences->curso }}">
                                                                                        </div>
                        
                                                                                        <div class="col-lg-2">
                                                                                            <label for="capainstitucion-{{ $capas->id }}" class="col-form-label">Institucion:</label>
                                                                                            <input type="text" id="capainstitucion-{{ $profeexperiences->id }}" name="profeexperiences[{{$key2}}][capainstitucion]"  class="form-control" required value="{{ $profeexperiences->capainstitucion }}">
                                                                                        </div>
                        
                                                                                        <div class="col-lg-2">
                                                                                            <label for="horas-{{ $capas->id }}" class="col-form-label">Horas:</label>
                                                                                            <input type="number" id="horas-{{ $profeexperiences->id }}" name="profeexperiences[{{$key2}}][horas]" class="form-control" required value="{{ $profeexperiences->horas }}">
                                                                                        </div>
                        
                        
                                                                                        <div class="col-lg-2">
                                                                                            <label for="anio-{{ $capas->id }}" class="col-form-label">Año de graduación:</label>
                                                                                            <input type="number" id="anio-{{ $profeexperiences->id }}" name="profeexperiences[{{$key2}}][anio]" class="form-control" required value="{{ $profeexperiences->anio }}">
                                                                                        </div>
                        
                        
                                                                                        <div class="col-lg-1">
                                                                                            <button type="button" class="btn btn-danger" onclick="eliminarEstudio({{ $profeexperiences->id }})">
                                                                                                Eliminar
                                                                                            </button>
                        
                                                                                        </div>
                                                                                    
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                
                                                                                @endforeach --}}
                                                                            
                                                                            {{-- @endif --}}
                                                                         
                                                                        </div>
                                                                        <button type="button" class="btn btn-primary" onclick="agregarEstudio()">Agregar Estudio</button>
                                                               
                                                                    </form>
                        
                                                                    <!--end::Table-->
                                                                </div>
                                                                <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_table_widget_7_tab_content_5">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            555555555555555
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->

                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_table_widget_7_tab_content_6">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            66666666666666
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->



                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_table_widget_7_tab_content_7">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            777777777777777
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tap pane-->


                                </div>
                                <!--end::Tab Content-->

                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Tables widget 8-->
                    </div>
                    <!--end::Col-->

                </div>
                <!--end::Row-->


            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    <div id="kt_app_footer" class="app-footer">
        <!--begin::Footer container-->
        <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2022©</span>
                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Footer container-->
    </div>
    <!--end::Footer-->
</div>
@endsection


<script>
    let estudioIndex = 1; 
    function agregarEstudio() {
        console.log('Agregando estudio...');
        const container = document.getElementById('estudios-container');
        const estudioHTML = `
        <form method="POST" action="add_study">
            @csrf 
            <div id="estudio-${estudioIndex}" class="form-group row mt-5">
                <div class="col-lg-2">
    
                    <label for="grados-${estudioIndex}" class="col-form-label">Grados académicos:</label>
                    <select id="grados-${estudioIndex}" name="idgrados" class="form-control" required>
                    <option value="1">BACHILLER</option>
                    <option value="2">INGENIERO</option>
                    <option value="3">MAESTRO</option>
                    </select>
    
                </div>
    
                                                                                                    
                <div class="col-lg-2">
                    <label for="institucion-${estudioIndex}" class="col-form-label">Institución:</label>
                    <input type="text" id="institucion-${estudioIndex}" name="institucion" class="form-control" required>
                </div>
    
                <div class="col-lg-2">
                    <label for="gradoobt-${estudioIndex}" class="col-form-label">Grado Obtenido:</label>
                    <input type="text" id="gradoobt-${estudioIndex}" name="gradoobtenido"  class="form-control" required ">
                </div>
    
    
                <div class="col-lg-2">
                <label for="concluidos-${estudioIndex}" class="col-form-label">Concluidos:</label>
                <select id="concluidos-${estudioIndex}" name="concluidos" class="form-control" required>
                <option value="1" >Sí</option>
                <option value="0" >No</option>
                </select>
    
                </div>
    
                <div class="col-lg-2">
                    <label for="anio-${estudioIndex}" class="col-form-label">Año de graduación:</label>
                    <input type="number" id="anio-${estudioIndex}" name="anio" class="form-control"  required>
                </div>
    
    
                <div class="col-lg-1">
                    <button type="submit" class="btn btn-danger">
                       Agregar
                    </button>

                    
                </div>
            </div>
            </form>
        `;
        container.insertAdjacentHTML('beforeend', estudioHTML);
        estudioIndex++;
    
        // Actualizar el valor de num_estudios
        document.getElementById('num_estudios').value = estudioIndex;
    }
    
    function eliminarEstudio(id) {
    
        const estudio = document.getElementById(`estudio-${id}`);
        estudio.remove();
    
    
        if (confirm('¿Estás seguro de que deseas eliminar este estudio?')) {
            fetch(`/delete-study/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Eliminación exitosa, actualizar la interfaz de usuario si es necesario
                    console.log('Estudio eliminado correctamente');
                    // Por ejemplo, podrías recargar la página para refrescar la lista de estudios
                    window.location.reload();
                } else {
                    console.error('Error al eliminar el estudio');
                }
            })
            .catch(error => {
                console.error('Error en la solicitud:', error);
            });
        }
    }
    
    


    
    </script>



<script>
    // Deshabilitar todos los tabs excepto el primero
    document.querySelectorAll('.tab-pane').forEach((tab, index) => {
        if (index !== 0) {
            tab.classList.add('disabled');
        }
    });
    
    // Mostrar solo el primer tab
    document.querySelector('.tab-pane:first-child').classList.add('show', 'active');
    </script>
    