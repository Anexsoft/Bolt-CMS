<?php

/* entradas/record.twig */
class __TwigTemplate_02b0a765a8ea107fc709d61666eadd7ef2094f8b88561265810997f3fee8b327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "entradas/record.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c9b05a4b62ca14e170602c51a503175dbb47a882b5a918638b522dae51b7a73 = $this->env->getExtension("native_profiler");
        $__internal_2c9b05a4b62ca14e170602c51a503175dbb47a882b5a918638b522dae51b7a73->enter($__internal_2c9b05a4b62ca14e170602c51a503175dbb47a882b5a918638b522dae51b7a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entradas/record.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9b05a4b62ca14e170602c51a503175dbb47a882b5a918638b522dae51b7a73->leave($__internal_2c9b05a4b62ca14e170602c51a503175dbb47a882b5a918638b522dae51b7a73_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c3cc122df087008563f132e9f1135b350f5201497e039cc8fcc134ab063e701f = $this->env->getExtension("native_profiler");
        $__internal_c3cc122df087008563f132e9f1135b350f5201497e039cc8fcc134ab063e701f->enter($__internal_c3cc122df087008563f132e9f1135b350f5201497e039cc8fcc134ab063e701f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class=\"intro-header\" style=\"background-image: url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "imagen", array())), "html", null, true);
        echo "')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"post-heading\">
                    <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "titulo", array()), "html", null, true);
        echo "</h1>
                    <h2 class=\"subheading\"></h2>
                    <span class=\"meta\">Publicado por ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "user", array()), "username", array()), "html", null, true);
        echo " el <i class=\"fa fa-calendar\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "datepublish", array()), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
</header>
";
        
        $__internal_c3cc122df087008563f132e9f1135b350f5201497e039cc8fcc134ab063e701f->leave($__internal_c3cc122df087008563f132e9f1135b350f5201497e039cc8fcc134ab063e701f_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_9f2776fb273a7959613e73b61ce78ee1c49f05e9b7085f4ee7bec466afc93106 = $this->env->getExtension("native_profiler");
        $__internal_9f2776fb273a7959613e73b61ce78ee1c49f05e9b7085f4ee7bec466afc93106->enter($__internal_9f2776fb273a7959613e73b61ce78ee1c49f05e9b7085f4ee7bec466afc93106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
        <!-- Post Content -->
        <article>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"well\">
                            <em>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "descripcion", array()), "html", null, true);
        echo "</em>
                        </div>
                        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenido", array()), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </article>
            
        </div>
    </div>
</div>
";
        
        $__internal_9f2776fb273a7959613e73b61ce78ee1c49f05e9b7085f4ee7bec466afc93106->leave($__internal_9f2776fb273a7959613e73b61ce78ee1c49f05e9b7085f4ee7bec466afc93106_prof);

    }

    public function getTemplateName()
    {
        return "entradas/record.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  91 => 30,  80 => 21,  74 => 20,  58 => 13,  53 => 11,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/_master.twig' %}*/
/* */
/* {% block header %}*/
/* <!-- Page Header -->*/
/* <!-- Set your background image for this header on the line below. -->*/
/* <header class="intro-header" style="background-image: url('{{ image(record.imagen) }}')">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                 <div class="post-heading">*/
/*                     <h1>{{record.titulo}}</h1>*/
/*                     <h2 class="subheading"></h2>*/
/*                     <span class="meta">Publicado por {{ record.user.username }} el <i class="fa fa-calendar"></i> {{ record.datepublish }}</span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* {% endblock header %}*/
/* {% block main %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*         <!-- Post Content -->*/
/*         <article>*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12">*/
/*                         <div class="well">*/
/*                             <em>{{record.descripcion}}</em>*/
/*                         </div>*/
/*                         {{record.contenido}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </article>*/
/*             */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock main %}*/
