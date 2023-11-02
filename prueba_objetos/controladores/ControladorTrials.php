<?php
    namespace TrialsCollection\controladores;
    use TrialsCollection\vistas\VistaInicio;
use TrialsCollection\vistas\VistaResultados;

    class ControladorTrials {
        public static function mostrarInicio() {
            VistaInicio::render();
        }

        public static function mostrarTodos() {
            VistaResultados::render();
        }
    }
?>