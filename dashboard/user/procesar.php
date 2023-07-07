<?php

use app\model\User;

session_start();
require_once "../../vendor/autoload.php";

$response = array();

if ($_POST) {
    $user = new User();
    try {
        if (!empty($_POST['opcion'])) {
            $opcion = $_POST['opcion'];
            $hoy = date('Y-m-d');


            if ($opcion == "generar_password") {
                $password = generar_string_aleatorio(10);

                $response['result'] = true;
                $response['alerta'] = false;
                $response['error'] = null;
                $response['icon'] =  "success";
                $response['title'] = "Contraseña generada.";
                $response['message'] = $password;
            }

            if ($opcion == "guardar") {
                # code...
                if (
                    !empty($_POST['name']) &&
                    !empty($_POST['email']) &&
                    !empty($_POST['telefono']) &&
                    !empty($_POST['password']) &&
                    isset($_POST['role'])
                ) {
                    # code...
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $telefono = $_POST['telefono'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $role = $_POST['role'];
                    $id = $_POST['id'];
                    


                    $existeEmail = $user->existe('email', '=', $email, $id, 1);

                    if (!$existeEmail) {
                        # code...
                        $data = [
                            $name,
                            $email,
                            $password,
                            $telefono,
                            $role,
                            $hoy
                        ];
                        $save = $user->save($data);
                        $contador = $user->count(1);
                        $usuario = $user->first('email', '=', $email);
                        $response['tr'] = false;
                        $response['item'] = $contador;
                        $response['name'] = $usuario['name'];
                        $response['email'] = $usuario['email'];
                        $response['telefono'] = $usuario['telefono'];
                        if ($usuario['role'] == 0) {
                            $response['role'] = "Estandar";
                        } else {
                            $response['role'] = "Administrador";
                        }

                        if ($usuario['estatus'] == 0) {
                            $response['estatus'] = '<i class="fas fa-user-times"></i>';
                        } else {
                            $response['estatus'] = '<i class="fas fa-user text-success"></i>';
                        }
                        $response['id'] = $usuario['id'];

                        $response['result'] = true;
                        $response['alerta'] = false;
                        $response['error'] = false;
                        $response['icon'] =  "success";
                        $response['title'] = "Guardado.";
                        $response['message'] = "Usuario creado exitosamente.";
                    } else {
                        $response['result'] = false;
                        $response['alerta'] = false;
                        $response['error'] = 'email_duplicado';
                        $response['icon'] =  "warning";
                        $response['title'] = "Email Duplicado.";
                        $response['message'] = "El email ya esta registrado.";
                    }
                } else {
                    $response['result'] = false;
                    $response['alerta'] = false;
                    $response['error'] = "faltan_datos";
                    $response['icon'] = "error";
                    $response['title'] = "Faltan datos.";
                    $response['message'] = "Todos los cambios son requeridos.";
                }
            }

            if ($opcion == "get_usuario") {
                $id = $_POST['id'];
                $usuario = $user->find($id);
                $response['name'] = $usuario['name'];
                $response['email'] = $usuario['email'];
                $response['telefono'] = $usuario['telefono'];
                $response['role'] = $usuario['role'];
                $response['estatus'] = $usuario['estatus'];
                $response['id'] = $usuario['id'];

                $response['result'] = true;
                $response['alerta'] = false;
                $response['error'] = false;
                $response['icon'] =  "success";
                $response['title'] = "Editar.";
                $response['message'] = "Editar Usuario.";
            }

            if ($opcion == "editar") {
                # code...
                if (
                    !empty($_POST['name']) &&
                    !empty($_POST['email']) &&
                    !empty($_POST['telefono']) &&
                    isset($_POST['role'])
                ) {
                    # code...
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $telefono = $_POST['telefono'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $role = $_POST['role'];
                    $id = $_POST['id'];
                    $item = $_POST['item'];

                    $existe = $user->existe('email', "=", $email, $id, 1);

                    if (!$existe) {
                        $usuario = $user->find($id);
                        $condicion = false;
                        $db_name = $usuario['name'];
                        $db_email = $usuario['email'];
                        $db_telefono = $usuario['telefono'];
                        $db_role = $usuario['role'];
                        

                        if ($db_name != $name) {
                            $condicion = true;
                            $user->update($id, 'name', $name);
                            $user->update($id, 'updated_at',$hoy);
                        }

                        if ($db_email != $email) {
                            $condicion = true;
                            $user->update($id, 'email', $email);
                            $user->update($id, 'updated_at', $hoy);
                        }

                        if ($db_telefono != $telefono) {
                            $condicion = true;
                            $user->update($id, 'telefono', $telefono);
                            $user->update($id, 'updated_at', $hoy);
                        }

                        if ($db_role != $role) {
                            $condicion = true;
                            $user->update($id, 'role', $role);
                            $user->update($id, 'updated_at', $hoy);
                        }

                        if (!empty($_POST['password'])) {
                            $condicion = true;
                            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                            $user->update($id, 'password', $password);
                        }

                        if ($condicion) {
                            # code...
                            $usuario = $user->find($id);
                            $response['tr'] = $usuario['id'];
                            $response['item'] = $item;
                            $response['name'] = $usuario['name'];
                            $response['email'] = $usuario['email'];
                            $response['telefono'] = $usuario['telefono'];
                            if ($usuario['role'] == 0) {
                                $response['role'] = "Estandar";
                            } else {
                                $response['role'] = "Administrador";
                            }

                            if ($usuario['estatus'] == 0) {
                                $response['estatus'] = '<i class="fas fa-user-times"></i>';
                            } else {
                                $response['estatus'] = '<i class="fas fa-user text-success"></i>';
                            }
                            $response['id'] = $usuario['id'];

                            $response['result'] = true;
                            $response['alerta'] = false;
                            $response['error'] = false;
                            $response['icon'] =  "success";
                            $response['title'] = "Guardado.";
                            $response['message'] = "Usuario editado exitosamente.";
                        } else {
                            # code...
                            $response['result'] = false;
                            $response['alerta'] = false;
                            $response['error'] = 'no_cambios';
                            $response['icon'] =  "warning";
                            $response['title'] = "No se realizaron cambios.";
                            $response['message'] = "El email ya esta registrado.";
                        }
                    } else {
                        # code...
                        $response['result'] = false;
                        $response['alerta'] = false;
                        $response['error'] = 'email_duplicado';
                        $response['icon'] =  "warning";
                        $response['title'] = "Email Duplicado.";
                        $response['message'] = "El email ya esta registrado.";
                    }
                } else {
                    $response['result'] = false;
                    $response['alerta'] = false;
                    $response['error'] = "faltan_datos";
                    $response['icon'] = "error";
                    $response['title'] = "Faltan datos.";
                    $response['message'] = "Todos los cambios son requeridos.";
                }
            }

            if ($opcion == "eliminar") {
                # code...
                $id = $_POST['id'];
                $user->update($id, 'band', 0);
                $user->update($id, 'updated_at', $hoy);

                $response['result'] = true;
                $response['alerta'] = false;
                $response['error'] = null;
                $response['icon'] =  "success";
                $response['title'] = "Usuario eliminado.";
                $response['message'] = null;
            }

        } else {
            $response['result'] = false;
            $response['alerta'] = true;
            $response['error'] = "faltan_datos";
            $response['icon'] = "warning";
            $response['title'] = "Faltan datos.";
            $response['message'] = "La variable opcion no definida.";
        }
    } catch (PDOException $e) {
        $response['result'] = false;
        $response['alerta'] = true;
        $response['error'] = 'error_model';
        $response['icon'] =  "error";
        $response['title'] = "Error en el Model";
        $response['message'] = "PDOException {$e->getMessage()}";
    } catch (Exception $e) {
        $response['result'] = false;
        $response['alerta'] = true;
        $response['error'] = 'error_model';
        $response['icon'] =  "error";
        $response['title'] = "Error en el Model";
        $response['message'] = "General Error: {$e->getMessage()}";
    }
} else {
    $response['result'] = false;
    $response['alerta'] = true;
    $response['error'] = 'error_method';
    $response['icon'] =  "error";
    $response['title'] = "Error Method.";
    $response['message'] = "Deben enviarse los datos por el method POST.";
}
echo json_encode($response, JSON_UNESCAPED_UNICODE);
