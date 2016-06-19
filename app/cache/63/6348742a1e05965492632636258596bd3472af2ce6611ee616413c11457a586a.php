<?php

/* @bolt/dashboard/_quicklinks-buttons.twig */
class __TwigTemplate_71b7ec97e305a949544b1b34065dce5b2a857ed0ee69288dcd4bdec7cf0ff8a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cc06a1cd757c36cc5766e6d891e944bfe87240de233a79775097e9d6a84d8d7 = $this->env->getExtension("native_profiler");
        $__internal_6cc06a1cd757c36cc5766e6d891e944bfe87240de233a79775097e9d6a84d8d7->enter($__internal_6cc06a1cd757c36cc5766e6d891e944bfe87240de233a79775097e9d6a84d8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_quicklinks-buttons.twig"));

        // line 1
        echo "<div class=\"btn-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
            // line 3
            echo "        ";
            if (($this->env->getExtension('Bolt')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":create")) && $this->env->getExtension('Bolt')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":view")))) {
                // line 4
                echo "            <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $context["contenttypeslug"])), "html", null, true);
                echo "\">
                <i class=\"fa fa-plus\"></i> ";
                // line 5
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" => $context["contenttypeslug"]));
                echo "
            </a>
        ";
            }
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
";
        
        $__internal_6cc06a1cd757c36cc5766e6d891e944bfe87240de233a79775097e9d6a84d8d7->leave($__internal_6cc06a1cd757c36cc5766e6d891e944bfe87240de233a79775097e9d6a84d8d7_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_quicklinks-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="btn-group">*/
/*     {% for contenttypeslug, contenttype in app.config.get('contenttypes') %}*/
/*         {% if isallowed('contenttype:' ~ contenttypeslug ~ ':create') and isallowed('contenttype:' ~ contenttypeslug ~ ':view') %}*/
/*             <a class="btn btn-default" href="{{ path('editcontent', {'contenttypeslug': contenttypeslug}) }}">*/
/*                 <i class="fa fa-plus"></i> {{ __('contenttypes.generic.new', {'%contenttype%': contenttypeslug}) }}*/
/*             </a>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* </div>*/
/* */
