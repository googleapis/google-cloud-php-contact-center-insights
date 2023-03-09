<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace GPBMetadata\Google\Cloud\Contactcenterinsights\V1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�q
5google/cloud/contactcenterinsights/v1/resources.proto%google.cloud.contactcenterinsights.v1google/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.proto"�
ConversationY
call_metadata (2@.google.cloud.contactcenterinsights.v1.Conversation.CallMetadataH 1
expire_time (2.google.protobuf.TimestampH-
ttl (2.google.protobuf.DurationB�AH
name (	B�AR
data_source (2=.google.cloud.contactcenterinsights.v1.ConversationDataSource4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A.

start_time (2.google.protobuf.Timestamp
language_code (	
agent_id (	O
labels (2?.google.cloud.contactcenterinsights.v1.Conversation.LabelsEntryW

transcript (2>.google.cloud.contactcenterinsights.v1.Conversation.TranscriptB�AO
medium	 (2:.google.cloud.contactcenterinsights.v1.Conversation.MediumB�A0
duration
 (2.google.protobuf.DurationB�A

turn_count (B�AM
latest_analysis (2/.google.cloud.contactcenterinsights.v1.AnalysisB�AZ
runtime_annotations (28.google.cloud.contactcenterinsights.v1.RuntimeAnnotationB�Ak
dialogflow_intents (2J.google.cloud.contactcenterinsights.v1.Conversation.DialogflowIntentsEntryB�A
obfuscated_user_id (	?
CallMetadata
customer_channel (
agent_channel (�

Transcriptm
transcript_segments (2P.google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment�
TranscriptSegment0
message_time (2.google.protobuf.Timestamp
text (	

confidence (h
words (2Y.google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment.WordInfo
language_code (	
channel_tag ([
segment_participant	 (2>.google.cloud.contactcenterinsights.v1.ConversationParticipant�
dialogflow_segment_metadata
 (2j.google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment.DialogflowSegmentMetadataG
	sentiment (24.google.cloud.contactcenterinsights.v1.SentimentData�
WordInfo/
start_offset (2.google.protobuf.Duration-

end_offset (2.google.protobuf.Duration
word (	

confidence (B
DialogflowSegmentMetadata%
smart_reply_allowlist_covered (-
LabelsEntry
key (	
value (	:8q
DialogflowIntentsEntry
key (	F
value (27.google.cloud.contactcenterinsights.v1.DialogflowIntent:8":
Medium
MEDIUM_UNSPECIFIED 

PHONE_CALL
CHAT:|�Ay
1contactcenterinsights.googleapis.com/ConversationDprojects/{project}/locations/{location}/conversations/{conversation}B

metadataB

expiration"�
Analysis
name (	B�A5
request_time (2.google.protobuf.TimestampB�A4
create_time (2.google.protobuf.TimestampB�AS
analysis_result (25.google.cloud.contactcenterinsights.v1.AnalysisResultB�AT
annotator_selector (28.google.cloud.contactcenterinsights.v1.AnnotatorSelector:��A�
-contactcenterinsights.googleapis.com/AnalysisXprojects/{project}/locations/{location}/conversations/{conversation}/analyses/{analysis}"�
ConversationDataSourceF

gcs_source (20.google.cloud.contactcenterinsights.v1.GcsSourceH T
dialogflow_source (27.google.cloud.contactcenterinsights.v1.DialogflowSourceH B
source";
	GcsSource
	audio_uri (	
transcript_uri (	B�A"K
DialogflowSource$
dialogflow_conversation (	B�A
	audio_uri (	"�
AnalysisResultl
call_analysis_metadata (2J.google.cloud.contactcenterinsights.v1.AnalysisResult.CallAnalysisMetadataH ,
end_time (2.google.protobuf.Timestamp�
CallAnalysisMetadataJ
annotations (25.google.cloud.contactcenterinsights.v1.CallAnnotationj
entities (2X.google.cloud.contactcenterinsights.v1.AnalysisResult.CallAnalysisMetadata.EntitiesEntryU

sentiments (2A.google.cloud.contactcenterinsights.v1.ConversationLevelSentimenth
intents (2W.google.cloud.contactcenterinsights.v1.AnalysisResult.CallAnalysisMetadata.IntentsEntryw
phrase_matchers (2^.google.cloud.contactcenterinsights.v1.AnalysisResult.CallAnalysisMetadata.PhraseMatchersEntryS
issue_model_result (27.google.cloud.contactcenterinsights.v1.IssueModelResult^
EntitiesEntry
key (	<
value (2-.google.cloud.contactcenterinsights.v1.Entity:8]
IntentsEntry
key (	<
value (2-.google.cloud.contactcenterinsights.v1.Intent:8m
PhraseMatchersEntry
key (	E
value (26.google.cloud.contactcenterinsights.v1.PhraseMatchData:8B

metadata"�
IssueModelResultI
issue_model (	B4�A1
/contactcenterinsights.googleapis.com/IssueModelF
issues (26.google.cloud.contactcenterinsights.v1.IssueAssignment"
ConversationLevelSentiment
channel_tag (L
sentiment_data (24.google.cloud.contactcenterinsights.v1.SentimentData"J
IssueAssignment
issue (	
score (
display_name (	B�A"�
CallAnnotationT
interruption_data
 (27.google.cloud.contactcenterinsights.v1.InterruptionDataH N
sentiment_data (24.google.cloud.contactcenterinsights.v1.SentimentDataH J
silence_data (22.google.cloud.contactcenterinsights.v1.SilenceDataH D
	hold_data (2/.google.cloud.contactcenterinsights.v1.HoldDataH W
entity_mention_data (28.google.cloud.contactcenterinsights.v1.EntityMentionDataH S
intent_match_data (26.google.cloud.contactcenterinsights.v1.IntentMatchDataH S
phrase_match_data (26.google.cloud.contactcenterinsights.v1.PhraseMatchDataH Q
issue_match_data (25.google.cloud.contactcenterinsights.v1.IssueMatchDataH 
channel_tag (\\
annotation_start_boundary (29.google.cloud.contactcenterinsights.v1.AnnotationBoundaryZ
annotation_end_boundary (29.google.cloud.contactcenterinsights.v1.AnnotationBoundaryB
data"Y
AnnotationBoundary

word_index (H 
transcript_index (B
detailed_boundary"�
Entity
display_name (	@
type (22.google.cloud.contactcenterinsights.v1.Entity.TypeM
metadata (2;.google.cloud.contactcenterinsights.v1.Entity.MetadataEntry
salience (G
	sentiment (24.google.cloud.contactcenterinsights.v1.SentimentData/
MetadataEntry
key (	
value (	:8"�
Type
TYPE_UNSPECIFIED 

PERSON
LOCATION
ORGANIZATION	
EVENT
WORK_OF_ART
CONSUMER_GOOD	
OTHER
PHONE_NUMBER	
ADDRESS

DATE

NUMBER	
PRICE"*
Intent

id (	
display_name (	"?
PhraseMatchData
phrase_matcher (	
display_name (	"(
DialogflowIntent
display_name (	"
InterruptionData"
SilenceData"

HoldData"�
EntityMentionData
entity_unique_id (	R
type (2D.google.cloud.contactcenterinsights.v1.EntityMentionData.MentionTypeG
	sentiment (24.google.cloud.contactcenterinsights.v1.SentimentData"C
MentionType
MENTION_TYPE_UNSPECIFIED 

PROPER

COMMON"+
IntentMatchData
intent_unique_id (	"1
SentimentData
	magnitude (
score ("b
IssueMatchDataP
issue_assignment (26.google.cloud.contactcenterinsights.v1.IssueAssignment"�

IssueModel
name (	B�A
display_name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
issue_count (B�AK
state (27.google.cloud.contactcenterinsights.v1.IssueModel.StateB�A\\
input_data_config (2A.google.cloud.contactcenterinsights.v1.IssueModel.InputDataConfig[
training_stats (2;.google.cloud.contactcenterinsights.v1.IssueModelLabelStatsB�A�A�
InputDataConfigN
medium (2:.google.cloud.contactcenterinsights.v1.Conversation.MediumB)
training_conversations_count (B�A
filter (	"j
State
STATE_UNSPECIFIED 

UNDEPLOYED
	DEPLOYING
DEPLOYED
UNDEPLOYING
DELETING:w�At
/contactcenterinsights.googleapis.com/IssueModelAprojects/{project}/locations/{location}/issueModels/{issue_model}"�
Issue
name (	B�A
display_name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
sample_utterances (	B�A:��A~
*contactcenterinsights.googleapis.com/IssuePprojects/{project}/locations/{location}/issueModels/{issue_model}/issues/{issue}"�
IssueModelLabelStats$
analyzed_conversations_count ((
 unclassified_conversations_count (`
issue_stats (2K.google.cloud.contactcenterinsights.v1.IssueModelLabelStats.IssueStatsEntryV

IssueStats
issue (	#
labeled_conversations_count (
display_name (	y
IssueStatsEntry
key (	U
value (2F.google.cloud.contactcenterinsights.v1.IssueModelLabelStats.IssueStats:8"�
PhraseMatcher
name (	
revision_id (	B�A�A
version_tag (	=
revision_create_time (2.google.protobuf.TimestampB�A
display_name (	Y
type (2F.google.cloud.contactcenterinsights.v1.PhraseMatcher.PhraseMatcherTypeB�A
active (]
phrase_match_rule_groups (2;.google.cloud.contactcenterinsights.v1.PhraseMatchRuleGroup?
activation_update_time	 (2.google.protobuf.TimestampB�AW

role_match
 (2C.google.cloud.contactcenterinsights.v1.ConversationParticipant.Role4
update_time (2.google.protobuf.TimestampB�A"P
PhraseMatcherType#
PHRASE_MATCHER_TYPE_UNSPECIFIED 

ALL_OF

ANY_OF:��A}
2contactcenterinsights.googleapis.com/PhraseMatcherGprojects/{project}/locations/{location}/phraseMatchers/{phrase_matcher}"�
PhraseMatchRuleGroupg
type (2T.google.cloud.contactcenterinsights.v1.PhraseMatchRuleGroup.PhraseMatchRuleGroupTypeB�AR
phrase_match_rules (26.google.cloud.contactcenterinsights.v1.PhraseMatchRule"`
PhraseMatchRuleGroupType,
(PHRASE_MATCH_RULE_GROUP_TYPE_UNSPECIFIED 

ALL_OF

ANY_OF"�
PhraseMatchRule
query (	B�A
negated (L
config (2<.google.cloud.contactcenterinsights.v1.PhraseMatchRuleConfig"x
PhraseMatchRuleConfigU
exact_match_config (27.google.cloud.contactcenterinsights.v1.ExactMatchConfigH B
config"*
ExactMatchConfig
case_sensitive ("�
Settings
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
language_code (	3
conversation_ttl (2.google.protobuf.Durationu
pubsub_notification_settings (2O.google.cloud.contactcenterinsights.v1.Settings.PubsubNotificationSettingsEntryW
analysis_config (2>.google.cloud.contactcenterinsights.v1.Settings.AnalysisConfig�
AnalysisConfig/
\'runtime_integration_analysis_percentage (/
\'upload_conversation_analysis_percentage (T
annotator_selector (28.google.cloud.contactcenterinsights.v1.AnnotatorSelectorA
PubsubNotificationSettingsEntry
key (	
value (	:8:d�Aa
-contactcenterinsights.googleapis.com/Settings0projects/{project}/locations/{location}/settings"�
RuntimeAnnotationZ
article_suggestion (2<.google.cloud.contactcenterinsights.v1.ArticleSuggestionDataH J

faq_answer (24.google.cloud.contactcenterinsights.v1.FaqAnswerDataH L
smart_reply (25.google.cloud.contactcenterinsights.v1.SmartReplyDataH e
smart_compose_suggestion	 (2A.google.cloud.contactcenterinsights.v1.SmartComposeSuggestionDataH b
dialogflow_interaction
 (2@.google.cloud.contactcenterinsights.v1.DialogflowInteractionDataH 
annotation_id (	/
create_time (2.google.protobuf.TimestampQ
start_boundary (29.google.cloud.contactcenterinsights.v1.AnnotationBoundaryO
end_boundary (29.google.cloud.contactcenterinsights.v1.AnnotationBoundaryN
answer_feedback (25.google.cloud.contactcenterinsights.v1.AnswerFeedbackB
data"�
AnswerFeedbacka
correctness_level (2F.google.cloud.contactcenterinsights.v1.AnswerFeedback.CorrectnessLevel
clicked (
	displayed ("p
CorrectnessLevel!
CORRECTNESS_LEVEL_UNSPECIFIED 
NOT_CORRECT
PARTIALLY_CORRECT
FULLY_CORRECT"�
ArticleSuggestionData
title (	
uri (	
confidence_score (\\
metadata (2J.google.cloud.contactcenterinsights.v1.ArticleSuggestionData.MetadataEntry
query_record (	
source (	/
MetadataEntry
key (	
value (	:8"�
FaqAnswerData
answer (	
confidence_score (
question (	T
metadata (2B.google.cloud.contactcenterinsights.v1.FaqAnswerData.MetadataEntry
query_record (	
source (	/
MetadataEntry
key (	
value (	:8"�
SmartReplyData
reply (	
confidence_score (U
metadata (2C.google.cloud.contactcenterinsights.v1.SmartReplyData.MetadataEntry
query_record (	/
MetadataEntry
key (	
value (	:8"�
SmartComposeSuggestionData

suggestion (	
confidence_score (a
metadata (2O.google.cloud.contactcenterinsights.v1.SmartComposeSuggestionData.MetadataEntry
query_record (	/
MetadataEntry
key (	
value (	:8"M
DialogflowInteractionData
dialogflow_intent_id (	

confidence ("�
ConversationParticipantQ
dialogflow_participant_name (	B*�A\'
%dialogflow.googleapis.com/ParticipantH 
user_id (	H "
dialogflow_participant (	B#
obfuscated_external_user_id (	Q
role (2C.google.cloud.contactcenterinsights.v1.ConversationParticipant.Role"_
Role
ROLE_UNSPECIFIED 
HUMAN_AGENT
AUTOMATED_AGENT
END_USER
	ANY_AGENTB
participant"�
View
name (	B�A
display_name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
value (	:d�Aa
)contactcenterinsights.googleapis.com/View4projects/{project}/locations/{location}/views/{view}"�
AnnotatorSelector"
run_interruption_annotator (
run_silence_annotator ($
run_phrase_matcher_annotator (P
phrase_matchers (	B7�A4
2contactcenterinsights.googleapis.com/PhraseMatcher
run_sentiment_annotator (
run_entity_annotator (
run_intent_annotator (!
run_issue_model_annotator (J
issue_models
 (	B4�A1
/contactcenterinsights.googleapis.com/IssueModelB�
)com.google.cloud.contactcenterinsights.v1BResourcesProtoPZ_cloud.google.com/go/contactcenterinsights/apiv1/contactcenterinsightspb;contactcenterinsightspb�%Google.Cloud.ContactCenterInsights.V1�%Google\\Cloud\\ContactCenterInsights\\V1�(Google::Cloud::ContactCenterInsights::V1�A�
%dialogflow.googleapis.com/ParticipantJprojects/{project}/conversations/{conversation}/participants/{participant}_projects/{project}/locations/{location}/conversations/{conversation}/participants/{participant}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

