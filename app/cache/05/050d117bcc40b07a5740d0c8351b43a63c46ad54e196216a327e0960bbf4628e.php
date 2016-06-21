<?php

/* entradas/listing.twig */
class __TwigTemplate_0ab26b805d01566c1578686f02559c01f83110b556ca9f3a1744565c6f4dac34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "entradas/listing.twig", 1);
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
        $__internal_bce6eaadfa5561d26040e366ea4d8d9bd7982607818449eee03809bcafbcd3c3 = $this->env->getExtension("native_profiler");
        $__internal_bce6eaadfa5561d26040e366ea4d8d9bd7982607818449eee03809bcafbcd3c3->enter($__internal_bce6eaadfa5561d26040e366ea4d8d9bd7982607818449eee03809bcafbcd3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entradas/listing.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce6eaadfa5561d26040e366ea4d8d9bd7982607818449eee03809bcafbcd3c3->leave($__internal_bce6eaadfa5561d26040e366ea4d8d9bd7982607818449eee03809bcafbcd3c3_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_cb7fb9710aa20db5cd11646a6b57eeee820142b7a033a101617b469183d88e74 = $this->env->getExtension("native_profiler");
        $__internal_cb7fb9710aa20db5cd11646a6b57eeee820142b7a033a101617b469183d88e74->enter($__internal_cb7fb9710aa20db5cd11646a6b57eeee820142b7a033a101617b469183d88e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->loadTemplate("partials/_header.twig", "entradas/listing.twig", 3)->display($context);
        
        $__internal_cb7fb9710aa20db5cd11646a6b57eeee820142b7a033a101617b469183d88e74->leave($__internal_cb7fb9710aa20db5cd11646a6b57eeee820142b7a033a101617b469183d88e74_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_7b59aeea80b4794866563edf4ddaafda3c1035ad1fe05b5167eb86e966893dfe = $this->env->getExtension("native_profiler");
        $__internal_7b59aeea80b4794866563edf4ddaafda3c1035ad1fe05b5167eb86e966893dfe->enter($__internal_7b59aeea80b4794866563edf4ddaafda3c1035ad1fe05b5167eb86e966893dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 13
            echo "                <div class=\"post-preview\">
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["record"], "contenttype", array()), "singular_slug", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "slug", array()), "html", null, true);
            echo "\">
                        <h2 class=\"post-title\">
                            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "titulo", array()), "html", null, true);
            echo "
                        </h2>
<!--
                        <h3 class=\"post-subtitle\">
                            Problems look mighty small from 150 miles up
                        </h3>
-->
                    </a>
                    <p class=\"post-meta\">Publicado por ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["record"], "user", array()), "username", array()), "html", null, true);
            echo " el <i class=\"fa fa-calendar\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "datepublish", array()), "html", null, true);
            echo "</p>
                </div>
                <hr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "                No se han econtrado publicaciones
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            
            <!-- Pager -->
            <ul class=\"pager\">
                <li class=\"next\">
                    <a href=\"#\">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

";
        
        $__internal_7b59aeea80b4794866563edf4ddaafda3c1035ad1fe05b5167eb86e966893dfe->leave($__internal_7b59aeea80b4794866563edf4ddaafda3c1035ad1fe05b5167eb86e966893dfe_prof);

    }

    public function getTemplateName()
    {
        return "entradas/listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  99 => 28,  88 => 24,  77 => 16,  70 => 14,  67 => 13,  62 => 12,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/_master.twig' %}*/
/* {% block header %}*/
/*     {% include 'partials/_header.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             */
/*             {% for record in records %}*/
/*                 <div class="post-preview">*/
/*                     <a href="{{ record.contenttype.singular_slug }}/{{ record.slug }}">*/
/*                         <h2 class="post-title">*/
/*                             {{ record.titulo }}*/
/*                         </h2>*/
/* <!--*/
/*                         <h3 class="post-subtitle">*/
/*                             Problems look mighty small from 150 miles up*/
/*                         </h3>*/
/* -->*/
/*                     </a>*/
/*                     <p class="post-meta">Publicado por {{ record.user.username }} el <i class="fa fa-calendar"></i> {{ record.datepublish }}</p>*/
/*                 </div>*/
/*                 <hr>*/
/*             {% else %}*/
/*                 No se han econtrado publicaciones*/
/*             {% endfor %}*/
/*             */
/*             <!-- Pager -->*/
/*             <ul class="pager">*/
/*                 <li class="next">*/
/*                     <a href="#">Older Posts &rarr;</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock main %}*/
