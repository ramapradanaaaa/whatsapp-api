<?php

namespace Xmark\WhatsappApi\Request;

abstract class MessageType {
    const Text = 'text';
    const Template = 'template';
    const Media = 'media';
    const Reaction = 'reaction';
    const Location = 'location';
    const Contact = 'contact';
    const Interactive = 'interactive';
}