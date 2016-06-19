<?php

/* @bolt/dashboard/_quicklinks-dropdown.twig */
class __TwigTemplate_6492d2e87f52017e1b8b1bde47e75e62974688ead31e5c682dd0c7fbe771bf1f extends Twig_Template
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
        $__internal_e88119391b44837b7c6eaff48d20955ee9e30b7f05514f03848c357a8a4080cc = $this->env->getExtension("native_profiler");
        $__internal_e88119391b44837b7c6eaff48d20955ee9e30b7f05514f03848c357a8a4080cc->enter($__internal_e88119391b44837b7c6eaff48d20955ee9e30b7f05514f03848c357a8a4080cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_quicklinks-dropdown.twig"));

        // line 1
        echo "<div class=\"btn-group\">
    <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        ";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("page.dashboard.button.add");
        echo "
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
            // line 8
            echo "        ";
            if (($this->env->getExtension('Bolt')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":create")) && $this->env->getExtension('Bolt')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":view")))) {
                // line 9
                echo "            <li>
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $context["contenttypeslug"])), "html", null, true);
                echo "\">
                    <i class=\"fa fa-plus\"></i>
                    ";
                // line 12
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" => $context["contenttypeslug"]));
                echo "
                </a>
            </li>
        ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>
</div>
";
        
        $__internal_e88119391b44837b7c6eaff48d20955ee9e30b7f05514f03848c357a8a4080cc->leave($__internal_e88119391b44837b7c6eaff48d20955ee9e30b7f05514f03848c357a8a4080cc_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_quicklinks-dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  55 => 16,  48 => 12,  43 => 10,  40 => 9,  37 => 8,  33 => 7,  26 => 3,  22 => 1,);
    }
}
/* <div class="btn-group">*/
/*     <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">*/
/*         {{ __('page.dashboard.button.add') }}*/
/*         <span class="caret"></span>*/
/*     </a>*/
/*     <ul class="dropdown-menu">*/
/*     {% for contenttypeslug, contenttype in app.config.get('contenttypes') %}*/
/*         {% if isallowed('contenttype:' ~ contenttypeslug ~ ':create') and isallowed('contenttype:' ~ contenttypeslug ~ ':view') %}*/
/*             <li>*/
/*                 <a href="{{ path('editcontent', {'contenttypeslug': contenttypeslug}) }}">*/
/*                     <i class="fa fa-plus"></i>*/
/*                     {{ __('contenttypes.generic.new', {'%contenttype%': contenttypeslug}) }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
