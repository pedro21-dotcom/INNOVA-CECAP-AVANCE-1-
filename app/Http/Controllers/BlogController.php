<?php

namespace App\Http\Controllers;


class BlogController extends Controller
{
    public function index()
    {
        $articulos = [
                    [
                        'categoria' => 'Metodología',
                        'imagen' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80',
                        'fecha' => '15 Sep, 2026',
                        'lectura' => '5 min read',
                        'titulo' => '¿Por qué la robótica es crucial en la educación primaria?',
                        'extracto' => 'Descubre cómo la introducción temprana de conceptos de programación mejora el razonamiento lógico y espacial en niños de 6 a 12 años.',
                        'delay' => '0'
                    ],
                    [
                        'categoria' => 'Logros',
                        'imagen' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&q=80',
                        'fecha' => '10 Sep, 2026',
                        'lectura' => '3 min read',
                        'titulo' => 'Alumnos de INNOVA CECAP destacan en torneo nacional',
                        'extracto' => 'Nuestro equipo de secundaria logró el primer puesto en la categoría de vehículos evasores de obstáculos utilizando plataformas Arduino.',
                        'delay' => '100'
                    ],
                    [
                        'categoria' => 'Recursos',
                        'imagen' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=800&q=80',
                        'fecha' => '05 Sep, 2026',
                        'lectura' => '7 min read',
                        'titulo' => '5 Proyectos básicos de Arduino para hacer en casa',
                        'extracto' => 'Una guía práctica con diagramas y código fuente para que padres e hijos puedan iniciar su aventura en la electrónica básica este fin de semana.',
                        'delay' => '200'
                    ]
        ];

        return view('pages.blog', compact('articulos'));
    }
}
