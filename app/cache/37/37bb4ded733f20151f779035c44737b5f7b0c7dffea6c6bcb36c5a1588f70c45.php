<?php

/* partials/_sub_pager.twig */
class __TwigTemplate_3ea23bcc43c742d083cc5e97dd7df4b29b96b9061a1b4e78cf8772c41d94deae extends Twig_Template
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
        $__internal_0d49315ae286b4c29172e8874f0945ba1890cc98699fc2b2a8da6a5c2936b462 = $this->env->getExtension("native_profiler");
        $__internal_0d49315ae286b4c29172e8874f0945ba1890cc98699fc2b2a8da6a5c2936b462->enter($__internal_0d49315ae286b4c29172e8874f0945ba1890cc98699fc2b2a8da6a5c2936b462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_sub_pager.twig"));

        // line 1
        $context["link"] = $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "makelink", array(), "method");
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) > 1)) {
            // line 4
            echo "<div class=\"pagination text-center ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
  <ul class=\"pagination\">
";
            // line 7
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > 1) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 8
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) - 1), "html", null, true);
                echo "\" rel=\"noindex, follow\">&#8592; </a></li>
";
            }
            // line 10
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > ((isset($context["surr"]) ? $context["surr"] : null) + 1))) {
                // line 11
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo 1;
                echo "\">&laquo; 1</a></li>
";
            }
            // line 13
            echo "
";
            // line 15
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > ((isset($context["surr"]) ? $context["surr"] : null) + 2))) {
                // line 16
                echo "    <li class=\"disabled\"><a>…</a></li>
";
            }
            // line 18
            echo "
";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(1, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) - (isset($context["surr"]) ? $context["surr"] : null))), min(($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) + (isset($context["surr"]) ? $context["surr"] : null)), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 20
                echo "    <li ";
                if (($context["i"] == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()))) {
                    echo "class='active'";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] != 1)) {
                    echo "rel=\"noindex, follow\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
";
            // line 24
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) - (isset($context["surr"]) ? $context["surr"] : null)) - 1))) {
                // line 25
                echo "    <li class=\"disabled\"><a>…</a></li>
";
            }
            // line 27
            echo "
";
            // line 29
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) - (isset($context["surr"]) ? $context["surr"] : null)))) {
                // line 30
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()), "html", null, true);
                echo "\" rel=\"noindex, follow\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()), "html", null, true);
                echo " &raquo; </a></li>
";
            }
            // line 32
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array())) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 33
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) + 1), "html", null, true);
                echo "\" rel=\"noindex, follow\">&#8594;</a></li>
";
            }
            // line 35
            echo "  </ul>
</div>
";
        }
        
        $__internal_0d49315ae286b4c29172e8874f0945ba1890cc98699fc2b2a8da6a5c2936b462->leave($__internal_0d49315ae286b4c29172e8874f0945ba1890cc98699fc2b2a8da6a5c2936b462_prof);

    }

    public function getTemplateName()
    {
        return "partials/_sub_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  114 => 33,  112 => 32,  103 => 30,  101 => 29,  98 => 27,  94 => 25,  92 => 24,  89 => 22,  69 => 20,  65 => 19,  62 => 18,  58 => 16,  56 => 15,  53 => 13,  46 => 11,  44 => 10,  37 => 8,  35 => 7,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set link = pager.makelink() %}*/
/* */
/* {% if pager.totalpages > 1 %}*/
/* <div class="pagination text-center {{class}}">*/
/*   <ul class="pagination">*/
/* {# 'first' and 'prev' #}*/
/* {% if pager.current > 1 and class!="narrow" %}*/
/*     <li><a href="{{link}}{{pager.current-1}}" rel="noindex, follow">&#8592; </a></li>*/
/* {% endif %}*/
/* {% if pager.current > surr+1 %}*/
/*     <li><a href="{{link}}{{1}}">&laquo; 1</a></li>*/
/* {% endif %}*/
/* */
/* {# start with '..' if there are more than surr+1 before currentpage.. #}*/
/* {% if pager.current > surr+2 %}*/
/*     <li class="disabled"><a>…</a></li>*/
/* {% endif %}*/
/* */
/* {% for i in max(1, pager.current-surr)..min(pager.current+surr, pager.totalpages) %}*/
/*     <li {% if i==pager.current %}class='active'{%endif%}><a href="{{link}}{{i}}" {% if i != 1 %}rel="noindex, follow"{% endif %}>{{i}}</a></li>*/
/* {% endfor %}*/
/* */
/* {# end with '..' if there are more than surr+1 after currentpage.. #}*/
/* {% if pager.current < (pager.totalpages - surr - 1) %}*/
/*     <li class="disabled"><a>…</a></li>*/
/* {% endif %}*/
/* */
/* {# 'next' and 'last' #}*/
/* {% if pager.current < pager.totalpages-surr %}*/
/*     <li><a href="{{link}}{{pager.totalpages}}" rel="noindex, follow">{{pager.totalpages}} &raquo; </a></li>*/
/* {% endif %}*/
/* {% if pager.current < pager.totalpages and class!="narrow" %}*/
/*     <li><a href="{{link}}{{pager.current+1}}" rel="noindex, follow">&#8594;</a></li>*/
/* {% endif %}*/
/*   </ul>*/
/* </div>*/
/* {% endif %}*/
/* */
