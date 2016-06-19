<?php

/* @bolt/dbcheck/dbcheck.twig */
class __TwigTemplate_2f2f732cd1b34f85abdbfcb1fc34a891ee283c37a5d55700dbcecc21d2a75715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/dbcheck/dbcheck.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c57922c1b1eb3cfd12cab7a462846d2434c9a697dc350c0170bd6546eb076d1 = $this->env->getExtension("native_profiler");
        $__internal_2c57922c1b1eb3cfd12cab7a462846d2434c9a697dc350c0170bd6546eb076d1->enter($__internal_2c57922c1b1eb3cfd12cab7a462846d2434c9a697dc350c0170bd6546eb076d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dbcheck/dbcheck.twig"));

        // line 5
        $context["__internal_4c51ea0876b77429f96c38f4422ff14f0a3df6f50cd297d92b7ec2e706884d23"] = $this->loadTemplate("@bolt/dbcheck/_macros.twig", "@bolt/dbcheck/dbcheck.twig", 5);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c57922c1b1eb3cfd12cab7a462846d2434c9a697dc350c0170bd6546eb076d1->leave($__internal_2c57922c1b1eb3cfd12cab7a462846d2434c9a697dc350c0170bd6546eb076d1_prof);

    }

    // line 7
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_4da9497291889f86034ba6e5e8ed57f8d98a7bdf39e5ac3c74110cbad4e83726 = $this->env->getExtension("native_profiler");
        $__internal_4da9497291889f86034ba6e5e8ed57f8d98a7bdf39e5ac3c74110cbad4e83726->enter($__internal_4da9497291889f86034ba6e5e8ed57f8d98a7bdf39e5ac3c74110cbad4e83726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Settings/Configuration";
        
        $__internal_4da9497291889f86034ba6e5e8ed57f8d98a7bdf39e5ac3c74110cbad4e83726->leave($__internal_4da9497291889f86034ba6e5e8ed57f8d98a7bdf39e5ac3c74110cbad4e83726_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_64220b5f96f1f7c5cc0241ab8158a4a0e41fee1aad9d5e4a10d2037838dbc657 = $this->env->getExtension("native_profiler");
        $__internal_64220b5f96f1f7c5cc0241ab8158a4a0e41fee1aad9d5e4a10d2037838dbc657->enter($__internal_64220b5f96f1f7c5cc0241ab8158a4a0e41fee1aad9d5e4a10d2037838dbc657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt')->trans("general.phrase.database-check-update");
        
        $__internal_64220b5f96f1f7c5cc0241ab8158a4a0e41fee1aad9d5e4a10d2037838dbc657->leave($__internal_64220b5f96f1f7c5cc0241ab8158a4a0e41fee1aad9d5e4a10d2037838dbc657_prof);

    }

    // line 11
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_cc8f85dee16907f4f1e13f8a5d7961a6b291cf73821c376937c1f62dd5efa68a = $this->env->getExtension("native_profiler");
        $__internal_cc8f85dee16907f4f1e13f8a5d7961a6b291cf73821c376937c1f62dd5efa68a->enter($__internal_cc8f85dee16907f4f1e13f8a5d7961a6b291cf73821c376937c1f62dd5efa68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 12
        echo "
    ";
        // line 13
        $context["hints"] = (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "check", array(), "any", false, true), "hints", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "check", array(), "any", false, true), "hints", array()), array())) : (array()));
        // line 14
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 17
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changes", array())) {
            // line 18
            echo "
                ";
            // line 19
            echo $context["__internal_4c51ea0876b77429f96c38f4422ff14f0a3df6f50cd297d92b7ec2e706884d23"]->getlist($this->env->getExtension('Bolt')->trans("general.phrase.modifications-database-colon"), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changes", array()));
            echo "
                ";
            // line 20
            echo $context["__internal_4c51ea0876b77429f96c38f4422ff14f0a3df6f50cd297d92b7ec2e706884d23"]->getlist($this->env->getExtension('Bolt')->trans("general.phrase.hints-colon"), (isset($context["hints"]) ? $context["hints"] : null));
            echo "

                <p class=\"alert alert-success\" role=\"alert\">";
            // line 22
            echo $this->env->getExtension('Bolt')->trans("general.phrase.databaase-up-to-date");
            echo "</p>

                <form action=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("dbcheck");
            echo "\" method=\"get\">
                    <p><button type=\"submit\" class=\"btn btn-default btn-primary\">";
            // line 25
            echo $this->env->getExtension('Bolt')->trans("general.phrase.check-again");
            echo "</button></p>
                </form>

            ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 28
(isset($context["context"]) ? $context["context"] : null), "check", array()), "responsestrings", array())) {
            // line 29
            echo "
                ";
            // line 30
            echo $context["__internal_4c51ea0876b77429f96c38f4422ff14f0a3df6f50cd297d92b7ec2e706884d23"]->getlist($this->env->getExtension('Bolt')->trans("general.phrase.modifications-needed-colon"), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "check", array()), "responsestrings", array()));
            echo "
                ";
            // line 31
            echo $context["__internal_4c51ea0876b77429f96c38f4422ff14f0a3df6f50cd297d92b7ec2e706884d23"]->getlist($this->env->getExtension('Bolt')->trans("general.phrase.hints-colon"), (isset($context["hints"]) ? $context["hints"] : null));
            echo "

                <form action=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("dbupdate");
            echo "\" method=\"post\">
                    <p>
                        <button type=\"submit\" class=\"btn btn-primary\">";
            // line 35
            echo $this->env->getExtension('Bolt')->trans("general.phrase.update-database");
            echo "</button>
                        ";
            // line 36
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
                // line 37
                echo "                            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("dbcheck", array("debug" => 1));
                echo "\" class=\"btn btn-tertiary\">
                                ";
                // line 38
                echo $this->env->getExtension('Bolt')->trans("general.phrase.show-proposed-alterations");
                echo "
                            </a>
                        ";
            }
            // line 41
            echo "                    </p>
                </form>

            ";
        } else {
            // line 45
            echo "
                <p class=\"alert alert-success\" role=\"alert\">";
            // line 46
            echo $this->env->getExtension('Bolt')->trans("general.phrase.database-up-to-date-already");
            echo "</p>

                ";
            // line 48
            echo $context["__internal_4c51ea0876b77429f96c38f4422ff14f0a3df6f50cd297d92b7ec2e706884d23"]->getlist($this->env->getExtension('Bolt')->trans("general.phrase.hints-colon"), (isset($context["hints"]) ? $context["hints"] : null));
            echo "

                ";
            // line 50
            if ($this->env->getExtension('Bolt')->isAllowed("prefill")) {
                // line 51
                echo "                <br>
                <hr>

                <p class=\"alert alert-warning\" role=\"alert\">
                    <b>";
                // line 55
                echo $this->env->getExtension('Bolt')->trans("general.phrase.tip-colon");
                echo "</b>
                    ";
                // line 56
                echo $this->env->getExtension('Bolt')->trans("Add some sample <a href='%url%' class='btn btn-default'>Records with Loripsum text</a>", array("%url%" => $this->env->getExtension('routing')->getPath("prefill")));
                echo "
                </p>
                ";
            }
            // line 59
            echo "
            ";
        }
        // line 61
        echo "
            ";
        // line 62
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "debug", array())) {
            // line 63
            echo "
                ";
            // line 64
            if ( !twig_test_empty($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "creates", array()))) {
                // line 65
                echo "                    <hr>
                    <h4>Table Creations</h4>
                    ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "creates", array()));
                foreach ($context['_seq'] as $context["table"] => $context["create"]) {
                    // line 68
                    echo "                        <h5>";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "</h5>
                        <ol>
                        ";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["create"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["sql"]) {
                        // line 71
                        echo "                            <li>";
                        echo twig_escape_filter($this->env, $context["sql"], "html", null, true);
                        echo "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sql'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "                        </ol>
                        ";
                    // line 74
                    echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "creates", array()), $context["table"], array(), "array"));
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['table'], $context['create'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                ";
            }
            // line 77
            echo "
                ";
            // line 78
            if ( !twig_test_empty($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "alters", array()))) {
                // line 79
                echo "                    <hr>
                    <h4>Table Alterations</h4>
                    ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "alters", array()));
                foreach ($context['_seq'] as $context["table"] => $context["alter"]) {
                    // line 82
                    echo "                        <h5>";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "</h5>
                        <ol>
                        ";
                    // line 84
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["alter"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["sql"]) {
                        // line 85
                        echo "                            <li>";
                        echo twig_escape_filter($this->env, $context["sql"], "html", null, true);
                        echo "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sql'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "                        </ol>
                        ";
                    // line 88
                    echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "diffs", array()), $context["table"], array(), "array"));
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['table'], $context['alter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                ";
            }
            // line 91
            echo "
            ";
        }
        // line 93
        echo "        </div>
    </div>

";
        
        $__internal_cc8f85dee16907f4f1e13f8a5d7961a6b291cf73821c376937c1f62dd5efa68a->leave($__internal_cc8f85dee16907f4f1e13f8a5d7961a6b291cf73821c376937c1f62dd5efa68a_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dbcheck/dbcheck.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 93,  282 => 91,  279 => 90,  271 => 88,  268 => 87,  259 => 85,  255 => 84,  249 => 82,  245 => 81,  241 => 79,  239 => 78,  236 => 77,  233 => 76,  225 => 74,  222 => 73,  213 => 71,  209 => 70,  203 => 68,  199 => 67,  195 => 65,  193 => 64,  190 => 63,  188 => 62,  185 => 61,  181 => 59,  175 => 56,  171 => 55,  165 => 51,  163 => 50,  158 => 48,  153 => 46,  150 => 45,  144 => 41,  138 => 38,  133 => 37,  131 => 36,  127 => 35,  122 => 33,  117 => 31,  113 => 30,  110 => 29,  108 => 28,  102 => 25,  98 => 24,  93 => 22,  88 => 20,  84 => 19,  81 => 18,  79 => 17,  74 => 14,  72 => 13,  69 => 12,  63 => 11,  51 => 9,  39 => 7,  32 => 3,  30 => 5,  11 => 3,);
    }
}
/* {# Page: NavSecondary > Configuration > Check database #}*/
/* */
/* {% extends '@bolt/_base/_page-nav.twig' %}*/
/* */
/* {% from '@bolt/dbcheck/_macros.twig' import list %}*/
/* */
/* {% block page_nav 'Settings/Configuration' %}*/
/* */
/* {% block page_title __('general.phrase.database-check-update') %}*/
/* */
/* {% block page_main %}*/
/* */
/*     {% set hints = context.check.hints|default([]) %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             {% if context.changes %}*/
/* */
/*                 {{ list(__('general.phrase.modifications-database-colon'), context.changes) }}*/
/*                 {{ list(__('general.phrase.hints-colon'), hints) }}*/
/* */
/*                 <p class="alert alert-success" role="alert">{{ __('general.phrase.databaase-up-to-date') }}</p>*/
/* */
/*                 <form action="{{ path('dbcheck') }}" method="get">*/
/*                     <p><button type="submit" class="btn btn-default btn-primary">{{ __('general.phrase.check-again') }}</button></p>*/
/*                 </form>*/
/* */
/*             {% elseif context.check.responsestrings %}*/
/* */
/*                 {{ list(__('general.phrase.modifications-needed-colon'), context.check.responsestrings) }}*/
/*                 {{ list(__('general.phrase.hints-colon'), hints) }}*/
/* */
/*                 <form action="{{ path('dbupdate') }}" method="post">*/
/*                     <p>*/
/*                         <button type="submit" class="btn btn-primary">{{ __('general.phrase.update-database') }}</button>*/
/*                         {% if app.debug %}*/
/*                             <a href="{{ path('dbcheck', {'debug': 1}) }}" class="btn btn-tertiary">*/
/*                                 {{ __('general.phrase.show-proposed-alterations') }}*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </p>*/
/*                 </form>*/
/* */
/*             {% else %}*/
/* */
/*                 <p class="alert alert-success" role="alert">{{ __('general.phrase.database-up-to-date-already') }}</p>*/
/* */
/*                 {{ list(__('general.phrase.hints-colon'), hints) }}*/
/* */
/*                 {% if isallowed('prefill') %}*/
/*                 <br>*/
/*                 <hr>*/
/* */
/*                 <p class="alert alert-warning" role="alert">*/
/*                     <b>{{ __('general.phrase.tip-colon') }}</b>*/
/*                     {{ __('Add some sample <a href=\'%url%\' class=\'btn btn-default\'>Records with Loripsum text</a>', {'%url%': path('prefill')}) }}*/
/*                 </p>*/
/*                 {% endif %}*/
/* */
/*             {% endif %}*/
/* */
/*             {% if context.debug %}*/
/* */
/*                 {% if context.creates is not empty %}*/
/*                     <hr>*/
/*                     <h4>Table Creations</h4>*/
/*                     {% for table, create in context.creates %}*/
/*                         <h5>{{ table }}</h5>*/
/*                         <ol>*/
/*                         {% for sql in create %}*/
/*                             <li>{{ sql }}</li>*/
/*                         {% endfor %}*/
/*                         </ol>*/
/*                         {{ dump(context.creates[table]) }}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/* */
/*                 {% if context.alters is not empty %}*/
/*                     <hr>*/
/*                     <h4>Table Alterations</h4>*/
/*                     {% for table, alter in context.alters %}*/
/*                         <h5>{{ table }}</h5>*/
/*                         <ol>*/
/*                         {% for sql in alter %}*/
/*                             <li>{{ sql }}</li>*/
/*                         {% endfor %}*/
/*                         </ol>*/
/*                         {{ dump(context.diffs[table]) }}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/* */
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock page_main %}*/
/* */
