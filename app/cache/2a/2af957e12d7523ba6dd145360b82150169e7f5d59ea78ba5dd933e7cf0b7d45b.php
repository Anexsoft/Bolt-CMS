<?php

/* @bolt/_macro/_files_path.twig */
class __TwigTemplate_8e5d976eab56d526b7dcf70de9783ed3e4889c903c3250cd3420cf681d43c9a7 extends Twig_Template
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
        $__internal_8495097b2ea27a5e84f04a1b3e138365fbcfbf5aae046fc9f6da4e360395226b = $this->env->getExtension("native_profiler");
        $__internal_8495097b2ea27a5e84f04a1b3e138365fbcfbf5aae046fc9f6da4e360395226b->enter($__internal_8495097b2ea27a5e84f04a1b3e138365fbcfbf5aae046fc9f6da4e360395226b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_files_path.twig"));

        
        $__internal_8495097b2ea27a5e84f04a1b3e138365fbcfbf5aae046fc9f6da4e360395226b->leave($__internal_8495097b2ea27a5e84f04a1b3e138365fbcfbf5aae046fc9f6da4e360395226b_prof);

    }

    // line 1
    public function getfiles_path($__pathsegments__ = null, $__namespace__ = null, $__pathoptions__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pathsegments" => $__pathsegments__,
            "namespace" => $__namespace__,
            "pathoptions" => $__pathoptions__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a9e3e9f17df57d84bbbe13e2262d1b9465f29b9e0b9e708722e09d8e215fd25d = $this->env->getExtension("native_profiler");
            $__internal_a9e3e9f17df57d84bbbe13e2262d1b9465f29b9e0b9e708722e09d8e215fd25d->enter($__internal_a9e3e9f17df57d84bbbe13e2262d1b9465f29b9e0b9e708722e09d8e215fd25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "files_path"));

            // line 2
            echo "    ";
            $context["namespace_path"] = $this->env->getExtension('routing')->getPath("files", (isset($context["pathoptions"]) ? $context["pathoptions"] : null));
            // line 3
            echo "    <p>
        ";
            // line 4
            echo $this->env->getExtension('Bolt')->trans("general.phrase.path-colon");
            echo "
        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["namespace_path"]) ? $context["namespace_path"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
            echo "</a>

        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pathsegments"]) ? $context["pathsegments"] : null));
            foreach ($context['_seq'] as $context["path"] => $context["segment"]) {
                // line 8
                echo "            /
            ";
                // line 9
                $context["pathoptions"] = twig_array_merge((isset($context["pathoptions"]) ? $context["pathoptions"] : null), array("path" => $context["path"], "namespace" => (isset($context["namespace"]) ? $context["namespace"] : null)));
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", (isset($context["pathoptions"]) ? $context["pathoptions"] : null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["segment"], "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </p>
";
            
            $__internal_a9e3e9f17df57d84bbbe13e2262d1b9465f29b9e0b9e708722e09d8e215fd25d->leave($__internal_a9e3e9f17df57d84bbbe13e2262d1b9465f29b9e0b9e708722e09d8e215fd25d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_macro/_files_path.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  70 => 10,  68 => 9,  65 => 8,  61 => 7,  54 => 5,  50 => 4,  47 => 3,  44 => 2,  27 => 1,);
    }
}
/* {% macro files_path(pathsegments, namespace, pathoptions) %}*/
/*     {% set namespace_path = path('files', pathoptions) %}*/
/*     <p>*/
/*         {{ __('general.phrase.path-colon') }}*/
/*         <a href="{{ namespace_path }}">{{ namespace }}</a>*/
/* */
/*         {% for path, segment in pathsegments %}*/
/*             /*/
/*             {% set pathoptions = pathoptions|merge({'path': path, 'namespace': namespace}) %}*/
/*             <a href="{{ path('files', pathoptions) }}">{{ segment }}</a>*/
/*         {% endfor %}*/
/*     </p>*/
/* {% endmacro %}*/
/* */
