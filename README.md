# [WIP] cockpit MoveBetweenCollections

Plugin/Addon for https://github.com/agentejo/cockpit

**Short-Description:** Allows to move collection entries in the collection-entry-editor-view to another collection

**[WIP] USE WITH CAUTION & OWN RISK !!! THIS MODULE IS BARELY TESTED !!! EXPORT YOUR DATA (as backup) BEFORE USING THIS PLUGIN [WIP]**

#### Note: This a very (very) early version which is missing dozens of things I still wish to implement!

**TODO:**
  - !!! Add ACL checking in order to prevent move actions by unauthorized users !!!
  - Check if the destination collection has the same fields as the source destinatin in order to prevent data loss when moving an entry to an collection that lacks source collection's structure
  - Add bulk move view for being able to move multiple entries to another collection at once
  - Add "quick move"-button to the context menu of an entry in the collection overview
  - Plugin code cleanage
  - Localization utility implementation (so that the Plugin could be translated... strings are currently hardcoded)
  - Redirect to some point that makes sense (either the destination collection overview, the source destination overview or perhaps the editor view of the moved entry) after moving an entry
  - allow partial copy of an entry (means if the destination collection has only a few fields in common with the source collection -> copy the entry there with only intersected fields and ask if the source entry shall be deleted in the source collection anyway)
  - add copy/clone entry (would do the same as "move" but omits the deletion of the source entry after the entry has been copied to another collection)
