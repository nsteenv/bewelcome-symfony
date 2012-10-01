<?php

/* BeWelcomeProfileBundle:Default:memberDetails.html.twig */
class __TwigTemplate_4e2bf5a5dcb13d3813e8e3513cf713ea extends Twig_Template
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
        echo "<h1>BeWelcome Member (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "member"), "username"), "html", null, true);
        echo ")</h1>

<a href=\"../list\">
\t\tBack to BeWelcome members list
\t</a>
\t\t

<h2>Sent messages</h2>
\t<ul>
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "member"), "sentMessages"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "message"), "html", null, true);
            echo "</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "\t\t\t<li>No message sent.</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "\t</ul>
\t<h3>Received messages</h3>
\t<ul>
\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "member"), "receivedMessages"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "message"), "html", null, true);
            echo "</li>
\t\t\t";
            // line 20
            if ((null === $this->getAttribute($this->getContext($context, "message"), "whenFirstRead"))) {
                // line 21
                echo "\t\t\t\t<b>NOT READ</b>
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\tRead
\t\t\t";
            }
            // line 25
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "\t\t\t<li>No message received.</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "\t</ul>
\t</li>";
    }

    public function getTemplateName()
    {
        return "BeWelcomeProfileBundle:Default:memberDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  80 => 26,  75 => 25,  71 => 23,  67 => 21,  65 => 20,  60 => 19,  55 => 18,  50 => 15,  43 => 13,  35 => 11,  30 => 10,  17 => 1,);
    }
}
