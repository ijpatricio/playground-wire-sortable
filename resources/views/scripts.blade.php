<script>

    function showMeSnapshot(element) {
        const first = Array.from(element.children).at(0)
        const snapshot = JSON.parse(first.firstChild.nextSibling.getAttribute('wire:snapshot'))
        console.log(
            snapshot.data.description
        )
    }

    function moveMarkerWithHTML(element) {
        const endMarker = '<!--[if ENDBLOCK]><![endif]-->'

        if (element.innerHTML.includes(endMarker) && !element.innerHTML.endsWith(endMarker) ) {
            element.innerHTML = element.innerHTML.replace(endMarker, '') + endMarker
        }

        console.log(element.innerHTML)
    }

    function findComment(text, element) {
        var treeWalker = document.createTreeWalker(
            element,
            NodeFilter.SHOW_COMMENT,
            {
                acceptNode: function(node) {
                    if (node.nodeValue.includes(text)) {
                        return NodeFilter.FILTER_ACCEPT;
                    }
                }
            }
        );
        return treeWalker.nextNode();
    }

    function moveComment(commentText, element, newParentSelector, position = 'beforeend') {
        var commentNode = findComment(commentText, element);

        console.log(commentNode)

        var newParent = document.querySelector(newParentSelector);

        {{-- TODO: NEEDS R&D --}}
        // if (commentNode && newParent) {
        //     newParent.insertAdjacentElement(position, commentNode);
        // }

        if (commentNode && newParent) {
            if (newParent.nextSibling) {
                newParent.parentNode.insertBefore(commentNode, newParent.nextSibling);
            } else {
                newParent.parentNode.appendChild(commentNode);
            }
        }
    }

</script>
