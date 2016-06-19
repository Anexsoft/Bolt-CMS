<?php

/* @bolt/_nav/_primary.twig */
class __TwigTemplate_f9da8a2a484d76cc6d1a179261f229fae74768b8c816fbdfc2a1a34ba44b78d9 extends Twig_Template
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
        $__internal_dd4be68e244e07505cdb81356b8501a0fdfbaa07e50615f3d8a24328ca77a8f2 = $this->env->getExtension("native_profiler");
        $__internal_dd4be68e244e07505cdb81356b8501a0fdfbaa07e50615f3d8a24328ca77a8f2->enter($__internal_dd4be68e244e07505cdb81356b8501a0fdfbaa07e50615f3d8a24328ca77a8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_primary.twig"));

        // line 1
        echo "<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-xaction=\"bolt.sidebar.toggle()\">
        <i class=\"fa fa-fw fa-bars\"></i> MENU
    </button>
    <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
        ";
        // line 7
        echo "        ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => "general/branding/name"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => "general/branding/name"), "method"), "Bolt")) : ("Bolt")), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\" class=\"navbar-site hidden-xs\"><span>";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        } else {
            echo "Site";
        }
        echo "</span></a>
</div>


<ul class=\"nav navbar-top-links navbar-right\">

    <li>
        ";
        // line 17
        echo "        <form class=\"navbar-form hidden-xs\">
            <div class=\"form-group has-feedback omnisearch\" role=\"search\">
                <select class=\"form-control\"></select>
                <span class=\"form-control-feedback\"><i class=\"fa fa-search\"></i></span>
            </div>
        </form>
    </li>

    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"hidden-xs\">
            <i class=\"fa fa-fw fa-external-link-square\"></i>
            ";
        // line 28
        echo $this->env->getExtension('Bolt')->trans("general.phrase.view-site");
        echo "
        </a>
    </li>

    <li class=\"close-live-editor\">
        <a>
            <i class=\"fa fa-fw fa-times-circle-o\"></i>
            ";
        // line 35
        echo $this->env->getExtension('Bolt')->trans("general.phrase.close-editor");
        echo "
        </a>
    </li>

    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"fa fa-fw fa-user\"></i> <span>";
        // line 41
        echo $this->env->getExtension('Bolt')->excerpt($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array()), 16);
        echo "</span> <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu dropdown-user\" role=\"menu\" >
            <li>
                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fa fa-fw fa-gear\"></i> ";
        echo $this->env->getExtension('Bolt')->trans("general.phrase.profile");
        echo "</a>
            </li>
            <li>
                <form action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" method=\"POST\">
                    <button class=\"btn btn-link btn-block\" type=\"submit\">
                        <span class=\"pull-left\"><i class=\"fa fa-fw fa-sign-out\" style=\"margin-left: 4px;\"></i> ";
        // line 50
        echo $this->env->getExtension('Bolt')->trans("general.phrase.logout");
        echo "</span>
                    </button>
                </form>
            </li>
        </ul>
    </li>

</ul>
";
        
        $__internal_dd4be68e244e07505cdb81356b8501a0fdfbaa07e50615f3d8a24328ca77a8f2->leave($__internal_dd4be68e244e07505cdb81356b8501a0fdfbaa07e50615f3d8a24328ca77a8f2_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_primary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 50,  104 => 48,  96 => 45,  89 => 41,  80 => 35,  70 => 28,  65 => 26,  54 => 17,  38 => 9,  32 => 7,  28 => 5,  22 => 1,);
    }
}
/* <div class="navbar-header">*/
/*     <button type="button" class="navbar-toggle" data-xaction="bolt.sidebar.toggle()">*/
/*         <i class="fa fa-fw fa-bars"></i> MENU*/
/*     </button>*/
/*     <a class="navbar-brand" href="{{ path('dashboard') }}">*/
/*         {# <img src="{{ paths.app }}view/img/bolt-icon.svg"> #}*/
/*         {{ app.config.get('general/branding/name')|default('Bolt') }}*/
/*     </a>*/
/*     <a href="{{ path('dashboard') }}" class="navbar-site hidden-xs"><span>{% if app.config.get('general/sitename') %}{{ app.config.get('general/sitename') }}{% else %}Site{% endif %}</span></a>*/
/* </div>*/
/* */
/* */
/* <ul class="nav navbar-top-links navbar-right">*/
/* */
/*     <li>*/
/*         {# one omnisearch here, for "small and up", the other in the side-navbar #}*/
/*         <form class="navbar-form hidden-xs">*/
/*             <div class="form-group has-feedback omnisearch" role="search">*/
/*                 <select class="form-control"></select>*/
/*                 <span class="form-control-feedback"><i class="fa fa-search"></i></span>*/
/*             </div>*/
/*         </form>*/
/*     </li>*/
/* */
/*     <li>*/
/*         <a href="{{ paths.root }}" target="_blank" class="hidden-xs">*/
/*             <i class="fa fa-fw fa-external-link-square"></i>*/
/*             {{ __('general.phrase.view-site') }}*/
/*         </a>*/
/*     </li>*/
/* */
/*     <li class="close-live-editor">*/
/*         <a>*/
/*             <i class="fa fa-fw fa-times-circle-o"></i>*/
/*             {{ __('general.phrase.close-editor') }}*/
/*         </a>*/
/*     </li>*/
/* */
/*     <li class="dropdown">*/
/*         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*             <i class="fa fa-fw fa-user"></i> <span>{{ user.displayname|excerpt(16) }}</span> <i class="fa fa-caret-down"></i>*/
/*         </a>*/
/*         <ul class="dropdown-menu dropdown-user" role="menu" >*/
/*             <li>*/
/*                 <a href="{{ path('profile') }}" role="menuitem" tabindex="-1"><i class="fa fa-fw fa-gear"></i> {{ __('general.phrase.profile') }}</a>*/
/*             </li>*/
/*             <li>*/
/*                 <form action="{{ path('logout') }}" method="POST">*/
/*                     <button class="btn btn-link btn-block" type="submit">*/
/*                         <span class="pull-left"><i class="fa fa-fw fa-sign-out" style="margin-left: 4px;"></i> {{ __('general.phrase.logout') }}</span>*/
/*                     </button>*/
/*                 </form>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* */
/* </ul>*/
/* */
