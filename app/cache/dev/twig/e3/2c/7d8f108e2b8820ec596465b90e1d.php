<?php

/* BeWelcomeProfileBundle:Default:index.html.twig */
class __TwigTemplate_e32c7d8f108e2b8820ec596465b90e1d extends Twig_Template
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
        // line 1
        echo "<h1>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("bewelcome.members", array(), "messages");
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "nbMembers"), "html", null, true);
        echo ")</h1>

\t<form action=\"\" method=\"post\" ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "userName"), 'label');
        echo "
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "userName"), 'errors');
        echo "
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "userName"), 'widget');
        echo "
\t\t
\t<input type=\"submit\" />
\t</form>


<table id=\"memebers_list\">
\t<tr><th>User name</th><th>Status</th></tr>
\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "members"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 15
            echo "\t\t<tr>
\t\t\t<td><a href=\"details/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "member"), "id"), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "member"), "userName"), "html", null, true);
            echo "
\t\t\t</a></td>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "member"), "status"), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "\t\t<tr><td colspan='2'>No member fount</td></tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "BeWelcomeProfileBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  73 => 22,  65 => 19,  60 => 17,  56 => 16,  53 => 15,  48 => 14,  37 => 6,  33 => 5,  29 => 4,  25 => 3,  17 => 1,);
    }
}
